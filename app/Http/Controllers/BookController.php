<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(){
        sleep(10);
    $bookCovers = BookCover::get([
        'uuid',
        'book_name'
        ,'book_image',
        'book_rate',
        'book_page_number',
        'created_at',
        'book_description',
        'views'
        ])->toArray();
    return response()->json($bookCovers);
    }
}
