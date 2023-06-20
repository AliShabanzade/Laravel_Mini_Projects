<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
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
            "user_id" => rand(1,36),
            "category_id" => rand(1,4),
            "brand_id" => rand(1,8),
            "name" => fake()->name,
            "detail" => fake()->realText,
            "description" => fake()->realText,


        ];
    }
}
