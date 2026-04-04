<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookAdminController extends Controller
{
    public function getBook(){
        return response()->json(Book::with(["getBook","getBookAuthor"])->paginate(10));
    }
}
