<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function store(Request $request)
    {
        $book = new Book;
        $book->title = 'The Great Gatsby';
        $book->author = 'F. Scott Fitzgerald';
        $book->save();

        return response()->json($book);
    }
}
