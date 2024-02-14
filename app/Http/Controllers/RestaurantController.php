<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
//  Importe le modèle Restaurant pour pouvoir interagir avec les données des restaurants.
use App\Models\Restaurant;
//  Importe la classe CreateRestaurantRequest, une sous-classe de FormRequest utilisée pour valider les données de création de restaurant.
use App\Http\Requests\CreateRestaurantRequest;
//  Importe la classe UpdateRestaurantRequest, une sous-classe de FormRequest utilisée pour valider les données de mise à jour de restaurant.
use App\Http\Requests\UpdateRestaurantRequest;
// Importe la classe RedirectResponse de Laravel, utilisée pour rediriger l'utilisateur après une action.
use Illuminate\Http\RedirectResponse;

// Définit la classe RestaurantController comme une sous-classe de Controller, ce qui signifie qu'elle hérite des fonctionnalités de base des contrôleurs dans Laravel.
class RestaurantController extends Controller
{
    // Méthode pour afficher la liste de tous les restaurants.
    public function index()
    {
        // Récupérer tous les restaurants depuis la base de données
        $restaurants = Restaurant::all();
        // Retourner la vue 'restaurant.index' en passant les restaurants récupérés comme données
        return view('restaurant.index', compact('restaurants'));
    }

    // Méthode pour afficher le formulaire de création d'un nouveau restaurant.
    public function create()
    {
        // Retourner la vue 'restaurant.create' pour afficher le formulaire de création
        return view('restaurant.create');
    }


    // Méthode pour enregistrer un nouveau restaurant dans la base de données.
    public function store(CreateRestaurantRequest $request)
    {
        // Obtenir les données validées depuis la requête
        $validatedData = $request->validated();
        // Créer une nouvelle instance de Restaurant avec les données validées
        $restaurant = new Restaurant();
        // Remplir les données du restaurant avec les données validées
        $restaurant->fill($validatedData);
        // Sauvegarder le restaurant dans la base de données
        $restaurant->save();

        // Rediriger l'utilisateur vers la liste des restaurants avec un message de succès
        return redirect('/restaurants')->with('success', 'Restaurant has been added');
    }



    // Méthode pour afficher les détails d'un restaurant spécifique.
    public function show(string $id)
    {
        // Récupérer le restaurant par son ID
        $restaurant = Restaurant::findOrFail($id);
        // Retourner la vue 'restaurant.show' en passant le restaurant récupéré comme données
        return view('restaurant.show', compact('restaurant'));
    }


    // Méthode pour afficher le formulaire de modification d'un restaurant spécifique.
    public function edit(string $id)
    {
        // Récupérer le restaurant par son ID
        $restaurant = Restaurant::findOrFail($id);
        // Retourner la vue 'restaurant.edit' en passant le restaurant récupéré comme données
        return view('restaurant.edit', compact('restaurant'));
    }

    // Méthode pour mettre à jour les données d'un restaurant dans la base de données.
    public function update(UpdateRestaurantRequest $request, string $id)
    {
        // Récupérer le restaurant par son ID
        $restaurant = Restaurant::findOrFail($id);
        // Appeler la méthode updateRestaurant définie dans UpdateRestaurantRequest pour mettre à jour le restaurant
        $request->updateRestaurant($restaurant);
        // Retourner la vue 'restaurant.show' en passant le restaurant mis à jour comme données
        return view('restaurant.show', compact('restaurant'));
    }

    // Méthode pour supprimer un restaurant de la base de données.
    public function destroy(string $id): RedirectResponse
    {
        // Récupérer le restaurant par son ID
        $restaurant = Restaurant::findOrFail($id);
        // Supprimer le restaurant de la base de données
        $restaurant->delete();
        // Rediriger l'utilisateur vers la liste des restaurants avec un message de succès
        return redirect('/restaurants')->with('success', 'Restaurant has been deleted');
    }
}
