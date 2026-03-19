<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = "books";
    protected $hidden = ['id', 'book_id','author_id'];
   public function getBook() {
    return $this->hasOne(BookCover::class, 'book_id', 'id')->select(['uuid', 'book_name', 'book_image',
        'book_rate', 'book_page_number', 'created_at',
        'book_description', 'views','book_id']);
}

public function getBookAuthor() {
    return $this->hasOneThrough(Author::class, AuthorBook::class, 'book_id', 'id','id','author_id')->select(['author_name','authors.uuid as uuid_author', 'authors.id as author_id']);
}

public function getBookContent(){
    return $this->hasMany(BookContent::class, 'book_id','id')->select(['uuid','label','value','book_id']);
}
}
