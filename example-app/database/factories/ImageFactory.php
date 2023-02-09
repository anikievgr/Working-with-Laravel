<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Image::class;

    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'text' => $this->faker->text(20),
            'image' => 'uploads/'.$this->faker->image('public/storage/uploads',500,500,  false,false),
        ];
    }
}