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
        Schema::create('escuderias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('escudo')->default("default.png");
            $table->string('puntos')->nullable();
            $table->unsignedBigInteger('user_id')->unique();
            $table->unsignedBigInteger('constructor_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('constructor_id')->references('id')->on('constructors')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('escuderias');
    }
};
