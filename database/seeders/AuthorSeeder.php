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
            'N. Gregory Mankiw',
            'Yuval Noah Harari',
            'Stephen Hawking',
            'Agatha Christie',
            'George Orwell',
            'Dan Brown',
            'F. Scott Fitzgerald',
            'J.R.R. Tolkien',
            'Ahmad Fuadi',
            'Raditya Dika',
            'Paulo Coelho',
            'Harper Lee',
            'John Green',
            'C.S. Lewis',
        ];

        foreach ($authors as $a) {
            Author::create([
                'name' => $a,
            ]);
        }
    }
}
