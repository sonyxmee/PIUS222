<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    //php artisan make:factory CategoryFactory -mCategory
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'active' => $this->faker->boolean,
            'slug' => $this->faker->slug,
            'parent_id' => 1 //Category::get()->random()->id
        ];
    }
}
