<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudent extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nivel',
        'fechaMatricula',
        'nomAlumno',
        'EdadAlumno',
        'genero',
        'EPS',
        'fechaNacimiento',
        'documentType',
        'numDocumento',
        'Esalud',
        'numTelefonico',
        'direccionAlumno',
        'barrio',
        'localidad',
        'nombreMama',
        'documentoMama',
        'telefonoMama',
        'direccionMama',
        'nombrePapa',
        'documentoPapa',
        'telefonoPapa',
        'direccionPapa',
        'nomPriRes',
        'docPriRes',
        'dirPriRes',
        'telPriRes',
        'nomSegRes',
        'docSegRes',
        'dirSegRes',
        'telSegRes',
    ];
}
