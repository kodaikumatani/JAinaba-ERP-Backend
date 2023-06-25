<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'name' => fake()->safeColorName(),
            'user_id' => User::query()->orderBy('id')->first()->value('id'),
            'price' => fake()->randomElement($array = [200, 300, 500]),
        ];
    }
}
