<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title"=>fake()->word(),
            "slug"=>fake()->word(),
            "intro"=>fake()->word(4),
            "body"=>fake()->paragraph(),
            "category_id"=>Category::factory(),
            "user_id"=>User::factory()
        ];
    }
}
