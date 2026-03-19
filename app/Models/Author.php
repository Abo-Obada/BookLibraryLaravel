<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $table = "authors";

    public function authorBooks(){
        return $this->hasMany(AuthorBook::class,'author_id');
    }

    public function book(){
        return $this->hasManyThrough(Book::class,AuthorBook::class,
            'author_id', // FK on author_books pointing to authors
            'id',        // FK on books pointing to author_books
            'id',        // Local key on authors
            'book_id'    // Local key on author_books
        );
    }
}
