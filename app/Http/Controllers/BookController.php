<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
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
}


// public function getAllBooks(){
//     $bookCovers = BookCover::select([
//         'uuid',
//         'book_name'
//         ,'book_image',
//         'book_rate',
//         'book_page_number',
//         'created_at',
//         'book_description',
//         'views'
//         ],"book")->paginate(5)->toArray();
//     return response()->json($bookCovers);
//     }
