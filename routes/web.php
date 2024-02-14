<?php

//Importe la classe Route du framework Laravel, qui est utilisée pour définir les routes de l'application.
use Illuminate\Support\Facades\Route;
//Importe la classe RestaurantController du namespace App\Http\Controllers, qui contient les méthodes pour gérer les requêtes HTTP concernant les restaurants dans l'application.
use App\Http\Controllers\RestaurantController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

//route GET pour afficher la liste des restaurants
//utilise la méthode index du contrôleur RestaurantController
//nom de la route: restaurants.index
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('restaurants.index');

//route GET pour afficher le formulaire de création de restaurant
//utilise la méthode create du contrôleur RestaurantController
// nom de la route: restaurants.create
Route::get('/restaurants/create', [RestaurantController::class, 'create'])->name('restaurants.create');

//route POST pour enregistrer un nouveau restaurant
//utilise la méthode store du contrôleur RestaurantController
//nom de la route : restaurants.store
Route::post('/restaurants/create', [RestaurantController::class, 'store'])->name('restaurants.store');

//route GET pour afficher les détails d'un restaurant spécifique
//utilise la méthode show du contrôleur RestaurantController
//nom de la route : restaurants.show
Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('restaurants.show');

//route GET pour afficher le formulaire de modification d'un restaurant
//utilise la méthode edit du contrôleur RestaurantController
//nom de la route : restaurants.edit
Route::get('/restaurants/{id}/edit', [RestaurantController::class, 'edit'])->name('restaurants.edit');

//route PUT pour mettre à jour un restaurant existant
//utilise la méthode update du contrôleur RestaurantController
//nom de la route est restaurants.update
Route::put('/restaurants/{id}', [RestaurantController::class, 'update'])->name('restaurants.update');

//route DELETE pour supprimer un restaurant
//utilise la méthode destroy du contrôleur RestaurantController
//nom de la route : restaurants.destroy
Route::delete('/restaurants/{id}', [RestaurantController::class, 'destroy'])->name('restaurants.destroy');
