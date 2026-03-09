<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(Request $request){
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

    public function categorizeBook(){
    $filter = preg_match('/^[\p{Arabic}a-zA-Z\p{N}]+\h?[\p{N}\p{Arabic}a-zA-Z]*$/u', request('category'));
    if($filter == 1){
        $query = request('category');
    }
    else {
        $query = [];
    }
    $bookCategory = Category::where('category_name','like',$query)->get();
    $category =   $bookCategory->pluck("id");
    $bookCovers = BookCover::select([
        'uuid',
        'book_name'
        ,'book_image',
        'book_rate',
        'book_page_number',
        'created_at',
        'book_description',
        'views'
        ],"book")->where("category_id",'like', [$category])->paginate(5);
        return response()->json($bookCovers);
    }

    public function getCategory(){
        $category = Category::select(['category_name','uuid'])->get();
    }
}

  //  $bookCategory = Category::where('category_name','like','%'.$query.'%')->get();
