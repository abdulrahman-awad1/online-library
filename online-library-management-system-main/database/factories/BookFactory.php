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
			'user_id' => nullValue(),
            'title' => $this->faker->sentence,
			'author' => $this->faker->name,
			'content' => $this->faker->paragraph(30)
        ];
    }
}
