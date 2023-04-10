<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Testing\WithFaker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'description'=> fake()->sentence(),
            'bory'=> fake()->paragraph(5, true),
            'price'=> fake()->randomFloat(2, 10),
            'slug'=> fake()->slug(),
        ];
    }
}

//$factory->define(\App\Product::class, function ($faker) {

    //return [
    //    'name' => $faker->name,
    //    'description'=> $faker->sentence,
    //    'bory'=> $faker->paragraph(5, true),
    //    'price'=> $faker->randomFloat(2, 10),
    //    'slug'=> $faker->slug,
    //];

//});
