<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudents', function (Blueprint $table) {
            $table->id();
            $table->string('nivel');
            $table->date('fechaMatricula');
            $table->string('nomAlumno');
            $table->integer('EdadAlumno');
            $table->string('genero');
            $table->string('EPS');
            $table->date('fechaNacimiento');
            $table->string('documentType');
            $table->integer('numDocumento')->unique();
            $table->string('Esalud');
            $table->integer('numTelefonico');
            $table->string('direccionAlumno');
            $table->string('barrio');
            $table->string('localidad');
            $table->string('nombreMama');
            $table->integer('documentoMama');
            $table->integer('telefonoMama');
            $table->string('direccionMama');
            $table->string('nombrePapa');
            $table->integer('documentoPapa');
            $table->integer('telefonoPapa');
            $table->string('direccionPapa');
            $table->string('nomPriRes');
            $table->integer('docPriRes');
            $table->string('dirPriRes');
            $table->integer('telPriRes');
            $table->string('nomSegRes');
            $table->integer('docSegRes');
            $table->string('dirSegRes');
            $table->integer('telSegRes');
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
        Schema::dropIfExists('estudents');
    }
}
