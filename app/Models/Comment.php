<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $hidden = ['id'];
    protected $table = "comments";
}
