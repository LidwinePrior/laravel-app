<!-- Utilise le modèle de mise en page app.blade.php -->
@extends('layout.app')

<!-- Définit le titre de la page -->
@section('title', 'Restaurant Details')

<!-- Débute la section de contenu -->
@section('content')

<h1>List of restaurants</h1>
<!-- boucle foreach pour parcourir chaque restaurant dans la variable $restaurants, qui est une collection d'objets restaurant.-->
@foreach($restaurants as $restaurant)
<div>
    <!-- href pointe vers la route d'affichage des détails du restaurant avec l'ID correspondant. -->
    <h3><a href="{{ route('restaurants.show', $restaurant->id) }}">{{ $restaurant->name }}</a></h3>
    @endforeach
    <!-- action du formulaire pointe vers la route de création de restaurant -->
    <form action="{{ route('restaurants.create') }}" method="GET">
        @csrf
        <button type="submit">Add</button>
    </form>

    <!-- Termine la section de contenu -->
    @endsection