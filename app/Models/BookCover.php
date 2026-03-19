<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookCover extends Model
{
    protected $hidden = ['book_id'];
    protected $table = "book_covers";

}
