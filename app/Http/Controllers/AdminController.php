<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use \App\Models\Author;

class AdminController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('admin.index', compact('books'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {   
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'publish_year' => 'required',
            'publisher' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'category_ids'   => 'required|array',      
            'category_ids.*' => 'exists:categories,id', 
        ]);
        $imagePath = null;
        if($request->hasFile('image')){
            $imagePath = $request->file('image')->store('storage/images', 'public');
        }

        $book = Book::create([
                'title' => $request->title,
                'description' => $request->description,
                'image' => $imagePath,
                'publish_year' => $request->publish_year,
                'publisher' => $request->publisher,
                'status' => 'available'
                ]);
        

        $author = Author::firstOrCreate(
                ['name' => $request->author_name] 
                );
        
        $book->authors()->attach($author->id);

        if ($request->has('category_ids')) {
            $book->categories()->attach($request->category_ids);
        }

        return redirect()->route('create-page')->with('success','Success Create Book');
    }

    public function editBook (Book $book)
    {
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);

        $request->validate([
        'title'         => 'required|string|max:255',
        'description'   => 'required|string',
        'publish_year'  => 'required|string', // Ingat snake_case
        'publisher'     => 'required|string',
        'author_name'   => 'required|string',
        'category_ids'  => 'required|array',
        'category_ids.*'=> 'exists:categories,id',
    ]);
        $book->update([
            'title' => $request->title,
            'description' => $request->description,
            'publish_year' => $request->publish_year,
            'publisher'=> $request->publisher,
        ]);

        $author = Author::firstOrCreate(
        ['name' => $request->author_name] 
        );

        $book->authors()->sync([$author->id]);
        $book->categories()->sync($request->category_ids);

        return redirect()->route('admin-page')->with('success', 'Success Update Book');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        if ($book->image && \Storage::disk('public')->exists($book->image)) {
        \Storage::disk('public')->delete($book->image);
        }
        $book->delete();
        return redirect()->route('admin-page')->with('success','Success Delete book`');
    }
}
