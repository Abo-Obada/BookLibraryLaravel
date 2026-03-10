<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookCover;
use App\Models\BookModel;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getAllBooks(){
    $bookCovers = BookCover::select([
        'uuid',
        'book_name'
        ,'book_image',
        'book_rate',
        'book_page_number',
        'created_at',
        'book_description',
        'views'
        ],"book")->paginate(5);
    return response()->json($bookCovers);
    }

//     public function categorizeBook(){
//     $query = request('cq');
//     $bookCategory = Category::where('category_name','like',$query)->get();
//     $category =   $bookCategory->pluck("id");

//     $bookCovers = BookCover::select(
// ['uuid','book_name','book_image',
//         'book_rate','book_page_number','created_at',
//         'book_description','views'
//         ]
//         );

//     if($query == "all"){
//       $bookCovers =  $bookCovers->paginate(20);
//     }else{
//     $bookCovers = $bookCovers->where("category_id",'like', [$category])->paginate(20);

//     }
//     return response()->json($bookCovers);
//     }


public function categorizeBook()
{
    $query = request()->validated()['cq'] ?? 'all'; // use Form Request ideally

    $bookCovers = BookCover::select([
        'uuid', 'book_name', 'book_image', 'book_rate',
        'book_page_number', 'created_at', 'book_description', 'views'
    ]);

    if ($query !== 'all') {
        $bookCovers->whereHas('category', function ($q) use ($query) {
            $q->where('category_name', 'like', '%' . $query . '%');
        });
    }

    return response()->json($bookCovers->paginate(5));
}

    public function getCategory(){
        $category = Category::select(['category_name','uuid'])->get();
        return response()->json($category);
    }
}

  //  $bookCategory = Category::where('category_name','like','%'.$query.'%')->get();
