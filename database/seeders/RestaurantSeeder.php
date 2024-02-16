<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Seed the application's database with restaurant data.
     *
     * @return void
     */
    public function run()
    {
        // Données des restaurants à insérer
        $restaurants = [
            [
                'name' => 'Restaurant C',
                'description' => 'Description du restaurant C',
                'address' => 'Adresse du restaurant C',
                'zipCode' => '8025',
                'town' => 'Belgium',
                'city' => 'Blala',
                'review' => '5'
            ],
            [
                'name' => 'Restaurant D',
                'description' => 'Description du restaurant D',
                'address' => 'Adresse du restaurant D',
                'zipCode' => '8025',
                'town' => 'Belgium',
                'city' => 'Tubize',
                'review' => '4'
            ],
            // Ajoutez autant d'entrées de restaurant que nécessaire
        ];

        // Boucle sur chaque restaurant et l'insère dans la base de données
        foreach ($restaurants as $restaurantData) {
            Restaurant::create($restaurantData);
        }
    }
}
