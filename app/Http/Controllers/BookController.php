<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use App\Models\Category;
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



    $bookCovers = Book::with(['getBook','getBookAuthor']);


    if (trim($query) === "all") {
        $bookCovers = $bookCovers->paginate(5)->through(fn($book)=> array_merge(
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


    //testing method
   public function getBookCover() {
    $bookCovers = Book::with(['getBook','getBookAuthor']);
    $bookCovers = $bookCovers->paginate(5)->through(fn($book)=> array_merge(
    $book->getBook->toArray(),
    $book->getBookAuthor->toArray(),
));

    return response()->json($bookCovers);
}

}

  //  $bookCategory = Category::where('category_name','like','%'.$query.'%')->get();
