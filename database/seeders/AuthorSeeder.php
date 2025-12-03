<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $authors = [
            'J.K. Rowling',
            'Tere Liye',
            'Andrea Hirata',
            'Dewi Lestari',
            'Habiburrahman El Shirazy',
            'Pramoedya Ananta Toer',
            'George Orwell',
            'Yuval Noah Harari',
            'Stephen Hawking',
            'Agatha Christie',
        ];

        foreach ($authors as $a) {
            Author::create([
                'name' => $a,
                'bio' => "Biografi singkat penulis $a",
            ]);
        }
    }
}
