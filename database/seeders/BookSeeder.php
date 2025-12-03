<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
                $books = [
            [
                'title' => 'Harry Potter and the Sorcerer\'s Stone',
                'description' => 'Petualangan Harry Potter tahun pertama.',
                'publish_year' => 1997,
                'publisher' => 'Bloomsbury',
            ],
            [
                'title' => 'Laskar Pelangi',
                'description' => 'Perjalanan anak-anak Belitung.',
                'publish_year' => 2005,
                'publisher' => 'Bentang Pustaka',
            ],
            [
                'title' => 'Hujan',
                'description' => 'Novel fiksi sains karya Tere Liye.',
                'publish_year' => 2016,
                'publisher' => 'Republika',
            ],
            [
                'title' => '1984',
                'description' => 'Karya klasik distopia George Orwell.',
                'publish_year' => 1949,
                'publisher' => 'Secker & Warburg',
            ],
            [
                'title' => 'A Brief History of Time',
                'description' => 'Penjelasan sains karya Stephen Hawking.',
                'publish_year' => 1988,
                'publisher' => 'Bantam Dell Publishing',
            ],
        ];

        foreach ($books as $b) {
            Book::create($b);
        }

        //create dummy data using faker factory
        Book::factory(20)->create();
    }
}
