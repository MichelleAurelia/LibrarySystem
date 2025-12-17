<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\MustLogin;
use App\Http\Middleware\PreventHistory;

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->middleware(MustLogin::class)->middleware(PreventHistory::class)->name('home');
Route::get('/view-all', [App\Http\Controllers\BookController::class, 'viewAll'])->name('view-all');
Route::get('/search', [App\Http\Controllers\BookController::class, 'search'])->name('books.search');
Route::get('/books/{book}', [App\Http\Controllers\BookController::class, 'show'])->name('books.show');
Route::get('/login', [AuthController::class,'loginForm'])->name('loginForm');
Route::post('/user/login',[AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class,'registrationForm'])->name('regisForm');
Route::post('/user/regis',[AuthController::class,'register'])->name('register');
Route::get('/user/logout', [AuthController::class, 'logout'])->middleware(MustLogin::class)->name('logout');
Route::get('/user/borrow-list', [App\Http\Controllers\BookController::class, 'borrowed'])->name('borrowList-page');


Route::get('/admin/manage', function () {
    return view('admin.manage');
})->name('admin-page');


//Route::get('/login-page', function () {
//return view('login');
//)->name('login-page');

//Route::get('/regist-page', function () {
//return view('register');
//})->name('regis-page');

Route::delete('author/{author}',[AuthorController::class, 'destroy'])->name('author.destroy');
