<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'title' => ucfirst($this->faker->sentence(3)),
            'image' => $this->faker->imageUrl(300, 400, 'books'),
            'description' => $this->faker->paragraph(),
            'publish_year' => $this->faker->year(),
            'publisher' => $this->faker->company(),
            'status' => 'available',
        ];
    }
}
