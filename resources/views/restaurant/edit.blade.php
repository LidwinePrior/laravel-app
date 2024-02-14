<!-- Utilise le modèle de mise en page app.blade.php -->
@extends('layout.app')

<!-- Définit le titre de la page -->
@section('title', 'Restaurant Details')

<!-- Débute la section de contenu -->
@section('content')

<!-- action du formulaire pointe vers la route de mise à jour de restaurant avec l'ID correspondant -->
<form action="{{ route('restaurants.update', ['id' => $restaurant->id]) }}" method="POST">
    <!--Génère un jeton CSRF pour protéger le formulaire contre les attaques CSRF (Cross-Site Request Forgery).  -->
    @csrf
    <!--  Indique que la méthode HTTP utilisée pour soumettre le formulaire est PUT, car nous utilisons une route de mise à jour qui nécessite cette méthode. -->
    @method('PUT')

    <label for="name">Edit the restaurant's informations</label>
    <input id="name" name="name" type="text" value="{{ $restaurant->name }}"> <br>
    <!-- Affichent les messages d'erreur pour chaque champ s'il y a des erreurs de validation. -->
    @if($errors->has('name'))
    <small class="error">{{ $errors->first('name') }}</small>
    @endif

    <label for="description">Description</label>
    <textarea id="description" name="description" cols="20" rows="10">{{ $restaurant->description }}</textarea> <br>
    @if($errors->has('description'))
    <small class="error">{{ $errors->first('description') }}</small>
    @endif

    <label for="address">address</label>
    <input type="text" name="address" id="address" value="{{ $restaurant->address }}"> <br>
    @if($errors->has('address'))
    <small class="error">{{ $errors->first('address') }}</small>
    @endif

    <label for="zipCode">zipCode</label>
    <input type="text" name="zipCode" id="zipCode" value="{{ $restaurant->zipCode }}"> <br>
    @if($errors->has('zipCode'))
    <small class="error">{{ $errors->first('zipCode') }}</small>
    @endif

    <label for="town">town</label>
    <input type="text" name="town" id="town" value="{{ $restaurant->town }}"> <br>
    @if($errors->has('town'))
    <small class="error">{{ $errors->first('town') }}</small>
    @endif

    <label for="city">city</label>
    <input type="text" name="city" id="city" value="{{ $restaurant->city }}"> <br>
    @if($errors->has('city'))
    <small class="error">{{ $errors->first('city') }}</small>
    @endif

    <label for="review">review</label>
    <input type="text" name="review" id="review" value="{{ $restaurant->review }}"> <br>
    @if($errors->has('review'))
    <small class="error">{{ $errors->first('review') }}</small>
    @endif
    <input type="submit" value="Updated Restaurant">
</form>
<!-- Bouton pour supprimer -->
<form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="POST">
    @csrf
    <!--  méthode HTTP utilisée pour soumettre le formulaire est DELETE, car nous utilisons une route de suppression qui nécessite cette méthode. -->
    @method('DELETE')
    <button type="submit">Supprimer</button>
</form>

<!-- Termine la section de contenu -->
@endsection