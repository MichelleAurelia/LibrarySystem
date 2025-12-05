<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Borrow;
use App\Models\User;
use App\Models\Book;

class BorrowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users = User::all();
        $books = Book::all();

        foreach ($users as $user) {
            Borrow::create([
                'user_id' => $user->id,
                'book_id' => $books->random()->id,
                'borrow_date' => now(),
                'due_date' => now()->addDays(14),
                'return_date' => null,
                'status' => 'borrowed',
            ]);
        }
    }
}
