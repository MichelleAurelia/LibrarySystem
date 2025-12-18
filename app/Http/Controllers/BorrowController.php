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
