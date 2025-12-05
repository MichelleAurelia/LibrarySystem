<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'image' => "storage/images/harry_potter.jpg",
                'description' => 'Petualangan Harry Potter tahun pertama.',
                'publish_year' => 1997,
                'publisher' => 'Bloomsbury',
                'authors' => ['J.K. Rowling'],
                'categories' => ['Novel', 'Fantasy', 'Fiction']
            ],

            [
                'title' => 'Laskar Pelangi',
                'image' => "storage/images/laskar_pelangi.jpg",
                'description' => 'Perjalanan anak-anak Belitung.',
                'publish_year' => 2005,
                'publisher' => 'Bentang Pustaka',
                'authors' => ['Andrea Hirata'],
                'categories' => ['Novel', 'Education']
            ],

            [
                'title' => 'Hujan',
                'image' => "storage/images/hujan.jpg",
                'description' => 'Novel fiksi sains karya Tere Liye.',
                'publish_year' => 2016,
                'publisher' => 'Republika',
                'authors' => ['Tere Liye'],
                'categories' => ['Science', 'Fiction']
            ],

            [
                'title' => 'Principles of Economics',
                'image' => "storage/images/principlesOfEconomics.jpg",
                'description' => 'Buku dasar ilmu ekonomi oleh N. Gregory Mankiw.',
                'publish_year' => 2017,
                'publisher' => 'Cengage Learning',
                'authors' => ['N. Gregory Mankiw'],
                'categories' => ['Economy', 'Education']
            ],

            [
                'title' => 'A Brief History of Time',
                'image' => "storage/images/aBriefHistory.jpg",
                'description' => 'Penjelasan sains karya Stephen Hawking.',
                'publish_year' => 1988,
                'publisher' => 'Bantam Dell Publishing',
                'authors' => ['Stephen Hawking'],
                'categories' => ['Science', 'History']
            ],
        ];

        foreach ($books as $b) {

            // Create book
            $book = Book::create([
                'title' => $b['title'],
                'image' => $b['image'],
                'description' => $b['description'],
                'publisher' => $b['publisher'],
                'publish_year' => $b['publish_year'],
                'status' => 'available',
            ]);

            // Attach authors by name
            $authorIds = Author::whereIn('name', $b['authors'])->pluck('id');
            $book->authors()->attach($authorIds);

            // Attach categories by name
            $categoryIds = Category::whereIn('name', $b['categories'])->pluck('id');
            $book->categories()->attach($categoryIds);
        }

        // Faker dummy data
        $authors = Author::all();
        $categories = Category::all();

        Book::factory(20)->create()->each(function ($book) use ($authors, $categories) {
            $book->authors()->attach($authors->random(rand(1, 2))->pluck('id'));
            $book->categories()->attach($categories->random(rand(1, 3))->pluck('id'));
        });
    }
}
