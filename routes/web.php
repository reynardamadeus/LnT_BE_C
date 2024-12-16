<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


//bad practice
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'getBooks'])->name('books.view');
Route::get('/create', [BookController::class, 'getCreateBook'])->name('book.create.page');

//HTTP Method
// Get, Post, Put/Patch, Delete
Route::post('/create-book', [BookController::class, 'createBook'])->name('book.create');

