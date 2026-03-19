<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $hidden = ['author_id','id'];
    protected $table = "authors";
}
