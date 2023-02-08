<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    protected $model = Post::class;
    public function definition()
    {

        return [
            'categoty_id' => Category::get()->random()->id,
            'image' => 'uploads/'.$this->faker->image('public/storage/uploads',500,500,  false,false),

        ];
    }
}
