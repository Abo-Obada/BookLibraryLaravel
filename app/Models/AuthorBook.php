<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorBook extends Model
{
    protected $hidden = ['id'];
    protected $table = "author_books";
}
