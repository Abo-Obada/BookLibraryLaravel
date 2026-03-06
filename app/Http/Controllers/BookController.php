<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getBookCover(){
    $bookCovers = BookCover::get();
    return response()->json($bookCovers);
    }
}
