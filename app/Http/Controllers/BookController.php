<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    function getUpdateBook($id){
        $book = Book::find($id);
        if(empty($book)){
            return redirect()->route('books.view')->with('error', 'the book data is not found');
        }
        return view('updateBook', compact('book'));
    }

    function createBook(BookRequest $request){
        $validatedData = $request->validated();

        Book::create($validatedData);

        return redirect()->route('books.view')->with('success', 'the newest book data is successfully created');
    }

    public function updateBook(BookRequest $request, $id){
        $book = Book::find($id);
        if(empty($book)){
            return redirect()->route('books.view')->with('error', 'the book data is not found');
        }
        $validatedData = $request->validated();
        $book->update($validatedData);

        return redirect()->route('books.view')->with('success', 'the book data is successfully updated');
    }

    public function deleteBook($id){
        //Book::destroy($id);
        $book = Book::find($id);
        if(empty($book)){
            return redirect()->route('books.view')->with('error', 'the book data is not found');
        }
        $book->delete();
        return redirect()->route('books.view')->with('success', 'the book data is successfully deleted');
    }

    public function searchBook(Request $request){
        $books = DB::table('books')->where('name', 'like' , '%' . $request->name . '%')->get();

        return view('welcome', compact('books'));
    }

}
