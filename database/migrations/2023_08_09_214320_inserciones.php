<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('inserciones', function (Blueprint $table) {
            $table->id();
            $table->string("noticia");
            $table->string("informacion");
            $table->string("datos");
            $table->string("fecha");
            $table->string("extra");
            $table->string("foto");
            $table->string("direccion");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('inserciones');
    }
};
