<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class PivotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $books = Book::all();
        $authors = Author::all();
        $categories = Category::all();

        foreach ($books as $book) {
            // Random 1–2 author untuk tiap buku
            $book->authors()->attach(
                $authors->random(rand(1, 2))->pluck('id')->toArray()
            );

            // Random 1–3 category
            $book->categories()->attach(
                $categories->random(rand(1, 3))->pluck('id')->toArray()
            );
        }
    }
}
