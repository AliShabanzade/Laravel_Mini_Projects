<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imageable_type' => fake()->randomElement([Brand::class , User::class , Blog::class,Product::class]),
            'imageable_id' => rand(1,36),
            "url" => fake()->imageUrl,

        ];
    }
}
