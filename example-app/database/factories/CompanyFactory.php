<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Slide;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Company::class;
    public function definition()
    {
        return [
            'title' => $this->faker->text(10),
            'titleLtext' => $this->faker->text(20),
            'image' => 'uploads/'.$this->faker->image('public/storage/uploads',500,500,  false,false),
        ];
    }
}
