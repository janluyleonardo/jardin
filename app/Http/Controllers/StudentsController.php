<?php

namespace App\Http\Controllers;

use App\Models\Estudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $student=$request->nomAlumno;

        $Estudent = new Estudent();

        $Estudent->nivel = $request->nivel;
        $Estudent->fechaMatricula = $request->fechaMatricula;
        $Estudent->nomAlumno = $request->nomAlumno;
        $Estudent->EdadAlumno = $request->EdadAlumno;
        $Estudent->genero = $request->genero;
        $Estudent->EPS = $request->EPS;
        $Estudent->fechaNacimiento = $request->fechaNacimiento;
        $Estudent->documentType = $request->documentType;
        $Estudent->numDocumento = $request->numDocumento;
        $Estudent->Esalud = $request->Esalud;
        $Estudent->numTelefonico = $request->numTelefonico;
        $Estudent->direccionAlumno = $request->direccionAlumno;
        $Estudent->barrio = $request->barrio;
        $Estudent->localidad = $request->localidad;
        $Estudent->nombreMama = $request->nombreMama;
        $Estudent->documentoMama = $request->documentoMama;
        $Estudent->telefonoMama = $request->telefonoMama;
        $Estudent->direccionMama = $request->direccionMama;
        $Estudent->nombrePapa = $request->nombrePapa;
        $Estudent->documentoPapa = $request->documentoPapa;
        $Estudent->telefonoPapa = $request->telefonoPapa;
        $Estudent->direccionPapa = $request->direccionPapa;
        $Estudent->nomPriRes = $request->nomPriRes;
        $Estudent->docPriRes = $request->docPriRes;
        $Estudent->dirPriRes = $request->dirPriRes;
        $Estudent->telPriRes = $request->telPriRes;
        $Estudent->nomSegRes = $request->nomSegRes;
        $Estudent->docSegRes = $request->docSegRes;
        $Estudent->dirSegRes = $request->dirSegRes;
        $Estudent->telSegRes = $request->telSegRes;

        $Estudent->save();
        $mensaje="Registro almacenado";
        $estudiantes = DB::table('estudents')->orderByDesc('id')->paginate(10);

        return view('garden.Students',compact('mensaje','student','estudiantes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
