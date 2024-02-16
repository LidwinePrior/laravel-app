<?php

// namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
// use Tests\TestCase;
// use App\Models\Restaurant;

// class DeleteTest extends TestCase
// {
//     /**
//      * A basic feature test example.
//      */
//     public function test_example(): void
//     {
//         $response = $this->delete('/restaurants');

//         $response->assertStatus(200);
//     }
//     use RefreshDatabase; // It is a trait that will be used to refresh the database after each test

//     public function test_can_delete(): void
//     {
//         $this->withoutExceptionHandling();

//         $this->assertEquals(0, Restaurant::count());

//         $data = [
//             'name' => 'Ceci est mon premier restaurant',
//             'description' => 'Hello there',
//             'address' => 'Rue de nulle part',
//             'zipCode' => '8025',
//             'town' => 'Belgium',
//             'city' => 'Blala',
//             'review' => '5'
//         ];

//         $response = $this->delete('/restaurants/{id}', $data);

//         $this->assertEquals(1, restaurant::count());

//         $restaurant = restaurant::first();

//         $this->assertEquals($data['name'], $restaurant->name);
//         $this->assertEquals($data['description'], $restaurant->description);
//         $this->assertEquals($data['address'], $restaurant->address);
//         $this->assertEquals($data['zipCode'], $restaurant->zipCode);
//         $this->assertEquals($data['town'], $restaurant->town);
//         $this->assertEquals($data['city'], $restaurant->city);
//         $this->assertEquals($data['review'], $restaurant->review);

//         $response->assertRedirect(route('restaurants.index'));
//     }
// }
