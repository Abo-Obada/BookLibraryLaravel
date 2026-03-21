<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $hidden = ["id","book_id","user_id"];

    public function getUsers(){
        return $this->hasManyThrough(User::class, Book::class, "user_id","id","book_id","id");
    }
}
