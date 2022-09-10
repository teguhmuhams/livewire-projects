<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use function Psy\debug;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => fake()->imageUrl(),
            'title' => fake()->text(),
            'description' => fake()->paragraph(),
            'price' => fake()->randomFloat(2, 5, 1000)
        ];
    }
}
