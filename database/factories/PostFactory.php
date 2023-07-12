<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();
        $slug = Str::slug($title , '-');
        $content = $this->faker->paragraph();
        $user_id = User::all()->random();

        return [
            'title' => $title,
            'content' => $content,
            'slug' => $slug,
            'user_id' => $user_id,
        ];
    }
}
