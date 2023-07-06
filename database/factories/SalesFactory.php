<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Store;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->unique()->dateTimeBetween($startDate = '-1 years', $endDate = '+1 years');
        return [
            'dateTime' => $date->format("Y-m-d H:i:s"),
            'hour' => $date->format("H"),
            'user_id' => User::query()->orderBy('id')->first()->value('id'),
            'store_id' => fake()->randomElement(Store::query()->pluck('id')),
            'product_id' => fake()->randomElement(Product::query()->pluck('id')),
            'quantity' => rand(0, 5),
            'store_total' => rand(0, 5),
        ];
    }
}
