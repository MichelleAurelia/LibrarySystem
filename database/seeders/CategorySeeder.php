<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            'Novel',
            'Fantasy',
            'Fiction',
            'Non-Fiction',
            'Technology',
            'Science',
            'History',
            'Biography',
            'Education',
            'Comics',
            'Economy',
            'Romance',
            'Mystery',
            'Thriller',
            'Adventure',
            'Philosophy',
            'Self-Help',
            'Classic',
            'Children',
            'Poetry',
            'Drama',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
            ]);
        }
    }
}
