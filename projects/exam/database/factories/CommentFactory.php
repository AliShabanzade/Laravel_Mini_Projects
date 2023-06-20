<?php

namespace Database\Factories;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commentable_type' => fake()->randomElement([Product::class , Blog::class]),
            'commentable_id' => rand(1,36),
             'name' => fake()->name,
            'user_id'=> rand(1,36),
            'body'=> fake()->text,



        ];
    }
}
