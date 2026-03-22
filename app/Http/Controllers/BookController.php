<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(){
        $bookCovers = Book::with(['getBook','getBookAuthor'])
        ->paginate(5)
        ->through(fn($book)=> array_merge(
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
            ->paginate(5)->through(fn($book)=> $book->getBook);
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
}
