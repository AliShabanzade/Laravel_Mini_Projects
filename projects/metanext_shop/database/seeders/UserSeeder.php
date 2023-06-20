<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)
            ->has(Blog::factory(2))
            ->has(Product::factory(2))
            ->create();
    }
}
