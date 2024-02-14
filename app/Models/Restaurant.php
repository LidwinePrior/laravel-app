<?php

namespace App\Models;

// importe le trait HasFactory, qui est utilisé pour permettre la création de "factories" pour ce modèle. Les factories sont utilisées pour générer des données de modèle pour les tests et les seeders.
use Illuminate\Database\Eloquent\Factories\HasFactory;
// importe la classe Model de Laravel, qui est la classe de base pour tous les modèles Eloquent.
use Illuminate\Database\Eloquent\Model;

// classe Restaurant comme une sous-classe de Model, ce qui signifie qu'elle hérite de toutes les fonctionnalités de base d'Eloquent.
class Restaurant extends Model
{
    use HasFactory;
    // spécifie le nom de la table de base de données associée à ce modèle. 
    protected $table = 'restaurants';

    // spécifie les attributs du modèle qui peuvent être mass assignable (c'est-à-dire qui peuvent être définis en masse en utilisant create ou fill). Cela est utile pour la sécurité et la protection contre l'attribution de masse non autorisée.
    protected $fillable = [
        'id',
        'name',
        'address',
        'zipCode',
        'town',
        'city',
        'description',
        'review',
    ];
}
