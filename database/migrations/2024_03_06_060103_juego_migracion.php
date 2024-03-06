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
        Schema::create('juegos',function (Blueprint $table){
            $table->id();
            $table->string('Nombre_Juego');
            $table->string('Desarrollador');
            $table->string('Categoria');
            $table->string('Descripcion');
            $table->integer('Precio');
            $table->date('Fecha_Lanzamiento');
            $table->string('Requisitos');
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
