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
    $bookCovers = BookCover::select([
        'uuid',
        'book_name'
        ,'book_image',
        'book_rate',
        'book_page_number',
        'created_at',
        'book_description',
        'views'
        ],"book")->paginate(5);
    return response()->json($bookCovers);
    }

    public function categorizeBook() {
        //create cq request for fetching filtering such as UUID, search and, author.
    $query = request('cq');
    $bookCategory = Category::where('category_name', 'like', '%' . $query . '%')->get();
    $categoryIds = $bookCategory->pluck("id");

    $bookCovers = Book::with('getBook');

    if (trim($query) === "all") {
        $bookCovers = $bookCovers->paginate(5);
    } elseif (trim($query) !== "") {
        $bookCovers = $bookCovers
            ->whereIn('category_id', $categoryIds)
            ->orWhere('book_name', 'like', '%' . $query . '%')
            ->paginate(5);
    } else {
        $bookCovers = $bookCovers->paginate(5);
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

   public function getBookCover() {
    $bookCover = Book::with('getBook')->get()->pluck('getBook');
    return response()->json($bookCover);
}



}

  //  $bookCategory = Category::where('category_name','like','%'.$query.'%')->get();
