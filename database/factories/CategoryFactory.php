<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
        ];
    }
}

$factory->define(\App\Category::class, function ($faker) {

    return [
        'name' => $faker->name,
        'description'=> $faker->sentence,
        'slug'=> $faker->slug,
    ];

});
