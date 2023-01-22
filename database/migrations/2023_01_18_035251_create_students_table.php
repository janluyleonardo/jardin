<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('nivel');
            $table->date('fechaMatricula');
            $table->string('nomAlumno');
            $table->string('EdadAlumno');
            $table->string('genero');
            $table->string('EPS');
            $table->date('fechaNacimiento');
            $table->string('documentType');
            $table->bigInteger('numDocumento')->unique();
            $table->string('Esalud');
            $table->bigInteger('numTelefonico');
            $table->string('direccionAlumno');
            $table->string('barrio');
            $table->string('localidad');
            $table->string('nombreMama');
            $table->bigInteger('documentoMama');
            $table->bigInteger('telefonoMama');
            $table->string('direccionMama');
            $table->string('nombrePapa');
            $table->bigInteger('documentoPapa');
            $table->bigInteger('telefonoPapa');
            $table->string('direccionPapa');
            $table->string('nomPriRes');
            $table->bigInteger('docPriRes');
            $table->string('dirPriRes');
            $table->bigInteger('telPriRes');
            $table->string('nomSegRes');
            $table->bigInteger('docSegRes');
            $table->string('dirSegRes');
            $table->bigInteger('telSegRes');
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
        Schema::dropIfExists('students');
    }
}
