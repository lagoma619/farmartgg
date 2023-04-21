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
        Schema::create('factulineas', function (Blueprint $table) {
            $table->id();
            $table->date('factlinea_fecha');
            //$table->string('fact_user_id');
            $table->unsignedBigInteger('factlinea_formulaid');
            $table->unsignedBigInteger('factlinea_productoid');
            $table->integer('factlinea_productocantidad');
            $table->integer('factlinea_productoprecio');
            $table->unsignedBigInteger('fact_facturaid');
            $table->foreign('factlinea_formulaid')->references('id')->on('formulas');
            $table->foreign('factlinea_productoid')->references('id')->on('productos');
            $table->foreign('fact_facturaid')->references('id')->on('facturas');
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
        Schema::dropIfExists('factulineas');
    }
};
