<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BookContent extends Model
{
        protected $hidden = ['id','book_id'];
    protected $table = "book_contents";
}
