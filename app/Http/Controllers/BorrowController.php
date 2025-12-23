<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    /**
     * Borrow a book. 
     */
    public function store(Request $request)

    {
        $user_id = session('user_id');
        $activeborrow = Borrow::where('user_id',$user_id)->whereNull('return_date')->count();
        if($activeborrow >= 3){
            return redirect()->back()->with('error','You have reach the maximum total of borrowed book!');
        }
        
        $location = $request->input('redirect_to', '/');
            
        
        $book = Book::findOrFail($request->book_id);
        if (!$book->isAvailable()) {
            return redirect($location)->with('error', 'Book is already borrowed');
        }

        
        Borrow::create([
            'user_id' => session('user_id'),
            'book_id' => $request->book_id,
            'borrow_date' => now(),
            'return_date' => null,
        ]);

        $book->update([
            'status' => 'borrowed'
        ]);



        return redirect($location)->with('success', 'Book borrowed successfully!');
    }

    /**
     * Return a book.
     */
    public function returnBook(Request $request)
    {
        $borrow = Borrow::findOrFail($request->borrow_id);

        $borrow->update([
            'return_date' => now(),
            'status' => 'returned'
        ]);

        $borrow->book->update([
        'status' => 'available'
        ]);

        return redirect()->back()->with('success', 'Book returned successfully!');
    }
}
