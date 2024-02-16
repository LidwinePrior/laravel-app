<?php

namespace Database\Factories;

use App\Models\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantFactory extends Factory
{
    protected $model = Restaurant::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'zipCode' => $this->faker->postcode,
            'town' => $this->faker->city,
            'city' => $this->faker->country,
            'review' => $this->faker->numberBetween(1, 5)
        ];
    }
}
