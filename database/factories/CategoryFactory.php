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
    public function definition(): array
    {
        $arreglo_color = ['#05FF1F', '#FF0202', '#05DBFF', '#1402FF', '#FF05DB', '#FFFF02'];
        return [
            'category_name' => fake()->word(),
            'color' => fake()->safeHexColor(),
        ];
    }
}
