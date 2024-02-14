<!-- Utilise le modèle de mise en page app.blade.php -->
@extends('layout.app')

<!-- Définit le titre de la page -->
@section('title', 'Restaurant Details')

<!-- Débute la section de contenu -->
@section('content')

<h1>Restaurant Details</h1>
<!-- Affiche le nom du restaurant récupéré depuis la variable $restaurant -->
<h2>{{ $restaurant->name }}</h2>
<!-- Affiche la description du restaurant récupéré depuis la variable $restaurant -->
<p><strong>Description:</strong> {{ $restaurant->description }}</p>
<!-- Affiche le code postale du restaurant récupéré depuis la variable $restaurant -->
<p><strong>Zip Code:</strong> {{ $restaurant->zipCode }}</p>
<!-- Affiche le pays du restaurant récupéré depuis la variable $restaurant -->
<p><strong>Town:</strong> {{ $restaurant->town }}</p>
<!-- Affiche la ville du restaurant récupéré depuis la variable $restaurant -->
<p><strong>City:</strong> {{ $restaurant->city }}</p>
<!-- Affiche l'avis du restaurant récupéré depuis la variable $restaurant -->
<p><strong>Review:</strong> {{ $restaurant->review }}</p>
<!-- bouton pour editer 
action du formulaire pointe vers la route de modification du restaurant avec l'ID correspondant    -->
<form action="{{ route('restaurants.edit', ['id' => $restaurant->id]) }}" method="GET">
    <button type="submit">Edit</button>
</form>

<!-- Termine la section de contenu -->
@endsection