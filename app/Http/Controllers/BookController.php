<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    function getBooks(){
        $books = Book::all();
        return view('welcome', compact('books'));
    }

    function getCreateBook(){
        return view('createBook');
    }

    function createBook(Request $request){
        $request->validate([
            'name' => ['required', 'min:1'],
            'description' => ['required', 'min:1'],
            'author' => ['required', 'min:3'],
            'release_date' => ['required'],
            'price' => ['required', 'integer', 'min:0']
        ]);
        
        Book::create([
            'name' => $request->name,
            'description' => $request->description,
            'author' => $request->author,
            'release_date' => $request->release_date,
            'price' => $request->price
        ]);

        return redirect()->route('books.view');
    }
}
