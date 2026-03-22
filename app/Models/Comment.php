<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table="comments";
    protected $hidden = ["id","book_id","user_id"];

    public function getReactionCountPerComment(){
        return $this->hasMany(Reaction::class,"comment_id","id")->select(["comment_id","id","uuid","reaction"]);
    }

    public function commentOwner(){
        return $this->belongsTo(User::class,"user_id","id")->select(["name","id"]);
    }
}
