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
            'Fiction',
            'Non-Fiction',
            'Technology',
            'Science',
            'History',
            'Biography',
            'Psychology',
            'Education',
            'Comics',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'description' => "Category for $category books",
            ]);
        }
    }
}
