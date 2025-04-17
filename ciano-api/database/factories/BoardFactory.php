<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->sentence(),
            'max_threads' => fake()->randomDigit(),
            'max_replies' => fake()->randomDigit(),
            'max_img_replies' => fake()->randomDigit(),
            'is_nsfw' => fake()->boolean(0.5),
        ];
    }
}
