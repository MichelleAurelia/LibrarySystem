<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    /**
     * Display the homepage.
     */
    public function index()
    {
        $books = \App\Models\Book::with('authors', 'categories')->inRandomOrder()->take(7)->get();
        $featuredBook = $books->first();
        $books = $books->skip(1);

        return view('home', compact('books', 'featuredBook'));
    }
}
