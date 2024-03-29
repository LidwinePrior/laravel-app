<?php

namespace Database\Seeders;

use App\Models\Restaurant;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Restaurant::factory()->count(10)->create();
        $this->call([
            RestaurantSeeder::class,
        ]);
    }
}
