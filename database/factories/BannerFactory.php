<?php

namespace Database\Factories;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Banner>
 */
class BannerFactory extends Factory
{
    //php artisan make:factory BannerFactory -m Banner
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Banner::class;
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'active' => $this->faker->boolean,
            'active_from' => $this->faker->dateTime,
            'active_to' => $this->faker->dateTime,
            'link' => $this->faker->url,
            'image' => $this->faker->imageUrl
        ];
    }
}
