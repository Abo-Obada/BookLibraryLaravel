<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuthorDetail extends Model
{
    protected $hidden = ['id'];
    protected $table = "author_details";
}
