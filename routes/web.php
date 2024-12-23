<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;


//bad practice
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'getBooks'])->name('books.view');
Route::get('/create', [BookController::class, 'getCreateBook'])->name('book.create.page');
Route::get('/update-page/{id}', [BookController::class, 'getUpdateBook'])->name('book.update.page');
Route::patch('/update/{id}', [BookController::class, 'updateBook'])->name('book.update');
Route::delete('/delete/{id}', [BookController::class, 'deleteBook'])->name('book.delete');
Route::post('/search', [BookController::class, 'searchBook'])->name('book.search');

//HTTP Method
// Get, Post, Put/Patch, Delete
Route::post('/create-book', [BookController::class, 'createBook'])->name('book.create');

