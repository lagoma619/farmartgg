<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulas', function (Blueprint $table) {
            $table->id();
            $table->string('form_numero_id');
            $table->unsignedBigInteger('form_cliente_id');
            $table->foreign('form_cliente_id')->references('id')->on('clientes');
            $table->date('form_fecha');
            $table->string('form_tipo_facturacion');
            $table->unsignedBigInteger('form_user_id');
            $table->foreign('form_user_id')->references('id')->on('clientes');
            $table->text('form_observacion');
            $table->string('form_estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formulas');
    }
};
