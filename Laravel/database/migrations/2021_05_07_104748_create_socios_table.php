<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSociosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('socios', function (Blueprint $table) {
            $table->id();
            $table->string('dni',9);
            $table->string('nombre',50);
            $table->string('slug',50);
            $table->string('apellidos', 50);
            $table->date('nacimiento');
            $table->string('direccion',100);
            $table->string('poblacion',30);
            $table->string('telefono',20);
            $table->string('alergias',1000);
            $table->unsignedBigInteger('seccion');
            $table->unsignedBigInteger('tutor');
            $table->foreign('seccion')
                ->references('id')
                ->on('secciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('tutor')
                ->references('id')
                ->on('tutores')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('socios');
    }
}
