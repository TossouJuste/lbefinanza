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
        
            Schema::create('portefeuilles', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->references('id')->on('users');
                $table->double('solde_p')->default(0); 
                $table->double('val_solde')->default(0); 
                $table->double('benef')->default(0); 
                $table->double('revenu_p')->default(0); 
                $table->string('profit')->default('17%');
                $table->timestamps();
            });
     
    
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portefeuilles');
    }
};
