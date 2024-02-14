<!-- Utilise le modèle de mise en page app.blade.php -->
@extends('layout.app')

<!-- Définit le titre de la page -->
@section('title', 'Restaurant Details')

<!-- Débute la section de contenu -->
@section('content')

<!-- action du formulaire pointe vers la route de stockage des restaurants -->
<form action="{{ route('restaurants.store') }}" method="POST">
    <!-- Génère un jeton CSRF pour protéger le formulaire contre les attaques CSRF (Cross-Site Request Forgery).     -->
    @csrf

    <label for="name">Add a restaurants</label>
    <input id="name" name="name" type="text"> <br>
    <!-- Affichent les messages d'erreur pour chaque champ s'il y a des erreurs de validation. -->
    @if($errors->has('name'))
    <small class="error">{{ $errors->first('name') }}</small>
    @endif

    <label for="description">Description</label>
    <textarea id="description" name="description" cols="20" rows="10"></textarea> <br>
    @if($errors->has('description'))
    <small class="error">{{ $errors->first('description') }}</small>
    @endif

    <label for="address">address</label>
    <input type="text" name="address" id="address"> <br>
    @if($errors->has('address'))
    <small class="error">{{ $errors->first('address') }}</small>
    @endif

    <label for="zipCode">zipCode</label>
    <input type="text" name="zipCode" id="zipCode"> <br>
    @if($errors->has('zipCode'))
    <small class="error">{{ $errors->first('zipCode') }}</small>
    @endif

    <label for="town">town</label>
    <input type="text" name="town" id="town"> <br>
    @if($errors->has('town'))
    <small class="error">{{ $errors->first('town') }}</small>
    @endif

    <label for="city">city</label>
    <input type="text" name="city" id="city"> <br>
    @if($errors->has('city'))
    <small class="error">{{ $errors->first('city') }}</small>
    @endif

    <label for="review">review</label>
    <input type="text" name="review" id="review"> <br>
    @if($errors->has('review'))
    <small class="error">{{ $errors->first('review') }}</small>
    @endif
    <input type="submit" value="Create Restaurant">
</form>

<!-- Termine la section de contenu -->
@endsection