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
        //create table veiculos 
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->string('modelo');
            $table->string('marca');
            $table->string('ano');
            $table->string('placa') -> unique();
            $table->string('cor');
            $table->string('km');
            $table->string('renavam');
            $table->string('tipo');
            $table->string('combustivel');
            $table->string('chassis');
            $table->string('valor');
            $table->string('comentario') -> nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop table veiculos
        Schema::dropIfExists('veiculos');
    }
};
