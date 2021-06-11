<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePreinscripciónsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('preinscripciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',255);
            $table->string('slug',255)->nullable();;
            $table->string('apellidos',255);
            $table->date('fecha_nacimiento');
            $table->string('nombre_tutor',255);
            $table->string('telefono', 20);
            $table->string('informacion', 1000)->nullable();
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
        Schema::dropIfExists('preinscripciones');
    }
}
