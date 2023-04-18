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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('clie_nombre');
            $table->string('clie_eps');
            $table->string('clie_email');
            $table->string('clie_direccion');
            $table->string('clie_ciudad');
            $table->string('clie_telefono');
            $table->string('clie_tipo_id');
            $table->string('clie_numero_id');
            $table->String('clie_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
