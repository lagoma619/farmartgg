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
            $table->date('fact_fecha');
            //$table->string('fact_user_id');
            $table->unsignedBigInteger('fact_formulaid');
            $table->unsignedBigInteger('fact_productoid');
            $table->foreign('fact_formulaid')->references('id')->on('formulas');
            $table->foreign('fact_productoid')->references('id')->on('productos');
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
