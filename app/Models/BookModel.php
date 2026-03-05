<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookModel extends Model
{
    public function getBooks(){
        $books = BookModel::with([])->get();
    }
}
