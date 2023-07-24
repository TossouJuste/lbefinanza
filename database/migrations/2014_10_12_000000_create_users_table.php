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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('telephone');
            $table->string('civilite');
            $table->string('photo_profil')->default('default.png');
            $table->string('pays');
            $table->double('solde')->default(0);
            $table->string('code_guichet');
            $table->string('code_bic');
            $table->string('code_banque');
            $table->string('numero_compte');
            $table->string('devise');
            $table->string('iban')->nullable();
            $table->string('adresse');
            $table->string('ville');
            $table->string('Types_comptes');
            $table->string('codePostal')->nullable();
            $table->string('piece')->nullable();
            $table->string('password');
            $table->integer('admin_validation')->default(0); // admin validation
            $table->string('confirmation_token')->nullable(); // client ou admin
            $table->integer('admin')->default(0); // client ou admin
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
