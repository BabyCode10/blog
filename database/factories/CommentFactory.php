<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Models\Post;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => Post::factory(),
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'website' => Str::slug($this->faker->company, '-') . '.com',
            'comment' => $this->faker->text(20),
        ];
    }
}
