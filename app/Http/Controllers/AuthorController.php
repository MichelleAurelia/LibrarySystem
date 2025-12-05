<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create.author');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Author::create($request->all());
        return redirect()->route('books.index');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('author.edit', compact('author'));
    }

    public function update(Request $request, $id){
        $request ->validate([
            'name' => 'required|string|max:255'
        ]);

        $author = Author::findOrFail($id);
        $author->name = $request->name;
        $author->save();

        return redirect()->back()->with('success',' update Author name successfully!!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->back()->with('success','delete Author successfully');
    }
}
