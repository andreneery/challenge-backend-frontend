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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
        $table->id();
        $table->unsignedBigInteger('cliente_id');
        $table->unsignedBigInteger('veiculo_id');
        $table->string('valor_compra');
        $table->string('data_compra');
        $table->timestamps();
    }
};
