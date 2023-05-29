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
        $post = Post::factory()->create();
        $post_id = $post->id;
        $user_id = $post->user_id;

        return [
            'post_id' => $post_id,
            'user_id' => $user_id,
            'body' => $this->faker->paragraph()
        ];
    }
}
