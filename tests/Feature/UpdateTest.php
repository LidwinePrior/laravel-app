<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Restaurant;

class UpdateTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Un exemple de test de fonctionnalité de base.
     */
    public function test_exemple(): void
    {
        // Créer un restaurant factice pour la mise à jour
        $restaurant = Restaurant::factory()->create();

        // Envoyer une requête de mise à jour pour ce restaurant factice
        $response = $this->put("/restaurants/{$restaurant->id}", [
            'name' => 'Nouveau nom',
            'description' => 'Nouvelle description',
            'address' => 'Nouvelle adresse',
            'zipCode' => '12345',
            'town' => 'Nouvelle ville',
            'city' => 'Nouveau pays',
            'review' => '5'
        ]);

        // Vérifier que la requête a réussi
        $response->assertStatus(302); // Redirection
    }

    public function test_peut_mettre_a_jour(): void
    {
        $this->withoutExceptionHandling();

        // Créer un restaurant
        $restaurant = Restaurant::factory()->create();

        // Données mises à jour
        $updatedData = [
            'name' => 'Nouveau nom',
            'description' => 'Nouvelle description',
            'address' => 'Rue de nulle part',
            'zipCode' => '8025',
            'town' => 'Belgium',
            'city' => 'Blala',
            'review' => '5'
        ];

        // Envoyer une requête de mise à jour pour le restaurant créé
        $response = $this->put("/restaurants/{$restaurant->id}", $updatedData);

        // Rafraîchir les données du restaurant depuis la base de données
        $restaurant->refresh();

        // Vérifier que les données ont été correctement mises à jour
        $this->assertEquals($updatedData['name'], $restaurant->name);
        $this->assertEquals($updatedData['description'], $restaurant->description);
        $this->assertEquals($updatedData['address'], $restaurant->address);
        $this->assertEquals($updatedData['zipCode'], $restaurant->zipCode);
        $this->assertEquals($updatedData['town'], $restaurant->town);
        $this->assertEquals($updatedData['city'], $restaurant->city);
        $this->assertEquals($updatedData['review'], $restaurant->review);

        // Vérifier que l'utilisateur est redirigé après la mise à jour
        $response->assertRedirect(route('restaurants.index'));
    }
}
