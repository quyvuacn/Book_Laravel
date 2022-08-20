<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $keyBook = $request->input('search');
        $books = Book::latest()->where(
            'title','like','%'.$keyBook.'%'
        )->paginate(3);
        return view('books.index',compact('books'));
    }


}
