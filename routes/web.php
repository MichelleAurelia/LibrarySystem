<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LocalController;
use App\Http\Middleware\MustLogin;
use App\Http\Middleware\PreventHistory;
use App\Http\Middleware\AdminHandler;


Route::get('lang/{locale}', LocalController::class)->name('switch.language');    

Route::get('/', [HomeController::class, 'index'])->middleware(MustLogin::class)->middleware(PreventHistory::class)->name('home');
Route::get('/view-all', [BookController::class, 'viewAll'])->name('view-all');
Route::get('/search', [BookController::class, 'search'])->name('books.search');
Route::view('/about', 'about')->name('about');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');
Route::get('/login', [AuthController::class,'loginForm'])->name('loginForm');
Route::post('/user/login',[AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class,'registrationForm'])->name('regisForm');
Route::post('/user/regis',[AuthController::class,'register'])->name('register');
Route::post('/books/borrow', [BorrowController::class,'store'])->name('books.borrow');
Route::get('/books/read/{borrow}', [BorrowController::class,'readBook'])->name('book.read');
Route::post('/books/return', [BorrowController::class,'returnBook'])->name('books.return');
Route::get('/user/logout', [AuthController::class, 'logout'])->middleware(MustLogin::class)->name('logout');
Route::get('/user/borrow-list', [BookController::class, 'borrowed'])->name('borrowList-page');
Route::get('/admin/manage-books', [BookController::class, 'index'])->middleware(AdminHandler::class)->name('admin-page');
Route::get('/admin/create-book', [BookController::class, 'create'])->middleware(AdminHandler::class)->name('create-page');
Route::get('/admin/{book}/edit-book', [BookController::class, 'edit'])->middleware(AdminHandler::class)->name('edit-page');
Route::post('/admin/addbook', [AdminController::class, 'store'])->middleware(AdminHandler::class)->name('add-book');
Route::put('/admin/editbook/{id}', [AdminController::class, 'update'])->middleware(AdminHandler::class)->name('update-book');
Route::delete('/admin/delete/{id}',[AdminController::class, 'destroy'])->middleware(AdminHandler::class)->name('delete-book');
Route::delete('author/{author}',[AuthorController::class, 'destroy'])->name('author.destroy');