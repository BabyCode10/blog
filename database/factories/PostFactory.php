<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\User;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = $this->faker->unique()->text(50);

        return [
            'user_id' => User::factory(),
            'title' => $faker,
            'slug' => Str::slug($faker, '-'),
            'content' => $this->faker->paragraph,
        ];
    }
}
