<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Borrow>
 */
class BorrowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $borrowDate = $this->faker->dateTimeBetween('-1 month', 'now');
        return [
            //
            'user_id' => \App\Models\User::factory(),
            'book_id' => \App\Models\Book::factory(),
            'borrow_date' => $borrowDate,
            'due_date' => (clone $borrowDate)->modify('+14 days'),
            'return_date' => null,
            'status' => 'borrowed',
        ];
    }
}
