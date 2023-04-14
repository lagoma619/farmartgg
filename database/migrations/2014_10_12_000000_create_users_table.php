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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_nombres');
            $table->string('user_apellidos');
            $table->string('user_email');
            $table->string('user_telefono');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('user_password');
            $table->string('user_tipo_id');
            $table->string('user_numero_id')->unique();
            $table->boolean('user_estado');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
