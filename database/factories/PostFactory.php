<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title'     => fake()->text(50),
            'text' => fake()->text(500),

            'user_id' => User::factory(),
        ];
    }
}
