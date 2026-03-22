<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $hidden = ["comment_id","id","user_id"];
    protected $table = "reactions";
}
