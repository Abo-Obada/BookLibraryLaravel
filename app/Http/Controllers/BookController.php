<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Reaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Purify\Facades\Purify;
use Illuminate\Support\Str as SupportStr;

class BookController extends Controller
{
    public function getAllBooks(){
        $bookCovers = Book::select(['books.uuid as book_uuid','id'])->with(['getBook','getBookAuthor'])
        ->paginate(5)
        ->through(fn($book)=> array_merge(
            $book->toArray(),
        $book->getBook->toArray(),
        $book->getBookAuthor->toArray()
    ));
    return response()->json($bookCovers);
    }

    public function categorizeBook() {
        //create cq request for fetching filtering such as UUID, search and, author.
    $query = request('cq');
    $bookCategory = Category::where('category_name', 'like', '%' . $query . '%')->get();
    $bookAuthor = Author::where('uuid', 'like', "%" . $query . "%")->get();
    $categoryIds = $bookCategory->pluck("id");
    $author_id = $bookAuthor->pluck("id");



    $bookCovers = Book::orderBy('id','asc')->select(['books.uuid as book_uuid','id'])->with(['getBook','getBookAuthor']);


    if (trim($query) === "all") {
        $bookCovers = $bookCovers->paginate(5)->through(fn($book)=> array_merge(
    $book->toArray(),
    $book->getBook->toArray(),
    $book->getBookAuthor->toArray(),
));
    } elseif (trim($query) !== "") {
        $bookCovers = $bookCovers
            ->whereHas('getBook', fn($q) => $q->whereIn('category_id', $categoryIds)
            ->orWhere('book_name', 'like', '%' . $query . '%'))->orWhereHas('getBookAuthor', fn($q) => $q->whereIn('authors.id', $author_id))
            ->paginate(5)->through(fn($book)=>  array_merge(
                $book->toArray(),
                $book->getBook->toArray(),
                $book->getBookAuthor->toArray(),
            ));
    } else {
        $bookCovers = $bookCovers->paginate(5)->through(fn($book)=> $book->getBook);
    }

    return response()->json($bookCovers);
}
    public function getCategory(){

    $category = Category::select(['category_name','uuid'])->get();
        return response()->json($category);
    }

    public function getAuthor(){
        $author = Author::select(['author_name','uuid','nationality','birth_date'])->get();
        return response()->json($author);
    }

    public function getBook($uuid){
    $book = new Book();
    $book = $book->with(['getBook','getBookAuthor','getBookContent']);
    return response()->json($book->where('uuid', $uuid)->first());
    }

    public function getComment($uuid){
        $bookId = Book::where('uuid', $uuid)->select('id')->pluck('id');
         $comments = Comment::where('book_id',$bookId)->with(['getReactionCountPerComment','commentOwner'])
         ->select(['comment','uuid','edited','rate','updated_at',"id","user_id"])
         ->paginate(5);

        return response()->json($comments);
    }

    public function createComment($uuid, Request $request){
    $pureUuid = Purify::clean($uuid);
     $book = Book::where("uuid",$pureUuid)->first();

     if($book == null){
               return response()->json(['mesage'=> 'not found'],404);
             }
    $validate =$request->validate(['comment'=>'required','rate'=>'required|numeric',
         ]);
         if(!$validate){
            return response()->json(['error'=> 'error'],0);
         }
        $pureComment = Purify::clean($request->comment);
        $rate = $request->rate;

        Comment::create(
        [
        'book_id'=> $book->id,
        'comment' => $pureComment,
        'rate'=> (int) $rate,
        'uuid' => SupportStr::uuid(),
        'user_id' => Auth::user()->id,
        ]);
     }

    public function createReaction($uuid, Request $request){

        $reactionVal = $request->validate(['reaction'=>'required|integer']);
        $user_id = Auth::id();
        $comment_id = Comment::where('uuid',$uuid)->first()->id;
        $reaction = new Reaction();

        if(!$reactionVal){
        return response()->json(['error'=> 'invalid output.Try to use numbers instead.'],422);
        }

      $getReactionIfExist = $reaction->where( ['comment_id' => $comment_id, 'user_id' => $user_id])->get();
      if($getReactionIfExist->isEmpty()){

      if($request->reaction == "1" || $request->reaction == "0"){
        $reaction->create((
        [
      'user_id' => $user_id,
      'reaction' => $request->reaction,
      'uuid' => SupportStr::uuid(),
      'comment_id' => $comment_id,
        ]

    ));
     return response()->json(['message'=> 'created'],200);
      }
      }else{
        $id = $getReactionIfExist->pluck('id');
       if($request->reaction == '-1'){

        $reaction->destroy($id);
           return response()->json(['message'=> 'destroyed'],200);
      }else{
        if($request->reaction == '0' || $request->reaction == '1'){
        $reaction->where('id', $id)->update((
        [
      'user_id' => $user_id,
      'reaction' => $request->reaction ,
      'uuid' => SupportStr::uuid(),
      'comment_id' => $comment_id,
        ]

    ));
            return response()->json(['message'=> 'updated'],200);
      }
    }
 return response()->json(['message'=> 'ok'],200);
}
}
}
