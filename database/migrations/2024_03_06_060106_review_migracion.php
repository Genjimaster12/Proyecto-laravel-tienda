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
        //
        Schema::create('reviews', function(Blueprint $table){
            $table->id('Id_reviews');
            $table->string('Nombre_usuario');
            $table->string('Nombre_Juego');
            $table->integer('Puntuacion');
            $table->string('Comentario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
