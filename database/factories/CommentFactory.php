<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'user_id' => rand(1, User::all()->count()),
            'post_id' => rand(1, Post::all()->count()),
            'body' => $this->faker->text(300),
        ];
    }
}
