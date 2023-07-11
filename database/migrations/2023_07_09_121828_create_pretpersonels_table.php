<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pretpersonels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('telephone');
            $table->string('pays');
            $table->string('adresse');
            $table->string('ville');
            $table->string('codePostal');
            $table->string('duree');
            $table->string('montant');

            $table->string('typepret');
            $table->string('statut')->nullable();
            $table->string('raison')->nullable();
            $table->string('secteur')->nullable();
            $table->string('description')->nullable();
            $table->string('chiffreAffaires')->nullable();
            $table->string('propriete')->nullable();
            $table->string('piece')->nullable();
            $table->string('montantDette')->nullable();
            $table->string('creanciers')->nullable();
            $table->string('mensualiteActuelle')->nullable();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('annee')->nullable();
            $table->string('dureeVoyage')->nullable();
            $table->string('dateDepart')->nullable();
            $table->string('destination')->nullable();
            $table->string('lieuNaissance')->nullable();
            $table->string('dateNaissance')->nullable();
            $table->string('nom_conjointe')->nullable();
            $table->string('prenom_conjointe')->nullable();
            

            $table->boolean('lue')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pretpersonels');
    }
};
