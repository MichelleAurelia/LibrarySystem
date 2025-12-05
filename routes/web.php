<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/books', function () {
    return 'All books page placeholder';
})->name('books.index');

Route::delete('author/{author}',[AuthorController::class, 'destroy'])->name('author.destroy');
