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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('exp_id')->references('id')->on('users'); 
            $table->bigInteger('dest_id')->references('id')->on('users'); 
            $table->text('message')->nullable(); 
            $table->string('message_type')->default("text");
            $table->string('file_path')->nullable();
           
       
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
