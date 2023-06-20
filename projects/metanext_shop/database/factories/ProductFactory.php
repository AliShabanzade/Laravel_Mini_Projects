<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
           "user_id"=> User::factory(),
            "title" => fake()->title,
            "body" => fake()->realText,
            "views" => rand(1,100),
            "published" => rand(0,1),
            "price" => rand(10000,20000),
        ];
    }
}
