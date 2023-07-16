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
        Schema::create('virements', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->references('id')->on('users');
            $table->string('pays');
            $table->string('banque');
            $table->string('iban');
            $table->string('bic');
            $table->string('code1')->nullable();
            $table->string('code2')->nullable();
            $table->string('code3')->nullable();
            $table->string('code')->nullable();
            $table->string('temps_attente')->default('Transfert en cours');
            $table->string('intitule_compte');
            $table->boolean('valide')->default(false);
            $table->double('montant');
            $table->integer('pourcentage')->default(25);
            $table->integer('code_pourcentage')->default(0);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('virements');
    }
};
