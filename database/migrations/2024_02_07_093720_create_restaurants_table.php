<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */


    // définir les actions à exécuter lors de l'exécution de la migration, qui 
    // dans ce cas crée la table avec les colonnes spécifiées.
    public function up(): void
    {
        Schema::create('restaurants', function (Blueprint $table) {
            // Clé primaire auto-incrémentée
            $table->id();
            //  Nom du restaurant (chaîne de caractères)
            $table->string('name');
            // Adresse du restaurant (chaîne de caractères)
            $table->string('address');
            // Code postal du restaurant (entier).
            $table->integer('zipCode');
            // Ville du restaurant (chaîne de caractères).
            $table->string('town');
            // Ville du restaurant (chaîne de caractères).
            $table->string('city');
            // Description du restaurant (texte).
            $table->text('description');
            // Avis du restaurant (entier).
            $table->integer('review');
        });
    }

    /**
     * Reverse the migrations.
     */

    // définir les actions à exécuter lors de la réversion de la migration,
    // qui dans ce cas supprime la table restaurants
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
