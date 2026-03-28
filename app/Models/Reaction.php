<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    protected $hidden = ["comment_id","id","user_id"];
    protected $table = "reactions";
    protected $fillable = ['user_id','reaction','uuid','comment_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id')->select(['id','users.uuid as user_uuid']);
    }
}
