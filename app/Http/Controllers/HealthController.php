<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudent;
use Illuminate\Http\Request;
use App\Models\controlHealth;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HealthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $texto = trim($request->get('texto'));
      $healths = controlHealth::where('nomAlumno','LIKE','%'.$texto.'%')
                  ->orWhere('numDocumento','LIKE','%'.$texto.'%')
                  ->orderBy('id')
                  ->paginate();
      // $healths = controlHealth::orderBy('id', 'desc')->paginate(5);
      // // $healths = controlHealth::where('nomAlumno','LIKE','%'.$texto.'%')
      // //             ->orWhere('numDocumento','LIKE','%'.$texto.'%')
      // //             ->orderBy('id')
      // //             ->paginate();
      return view('health.index',compact('healths','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudent $request)
    {
      $cdActual = $request->cdActual;
      $cdProximo = Carbon::create($cdActual);
      $cdProximo->addMonths(6)->format('Y-m-d');
      $request->merge([
        'nomAlumno' =>($request->nomAlumno),
      ]);
      $student = new controlHealth();
      $student->nomAlumno = $request->nomAlumno;
      $student->numDocumento = $request->numDocumento;
      $student->edadAlumno = $request->edadAlumno;
      $student->examenMedico = $request->examenMedico;
      $student->examenVisual = $request->examenVisual;
      $student->examenAuditivo = $request->examenAuditivo;
      $student->examenOdontologico = $request->examenOdontologico;
      $student->cdActual = $request->cdActual;
      $student->cdProximo = $cdProximo;
      try {
        $student->save();
        return redirect()->route('health.index', $student)->banner('Registro almacenado correctamente.');
      } catch (\Throwable $th) {
        return redirect()->route('health.index')->dangerBanner('Registro duplicado por favor validar el documento del alumno al cual le esta ingresando los datos');
      }
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
    public function update(Request $request, controlHealth $health)
    {
      $health->update($request->all());
      return redirect()->route('health.index', $health)->banner('Registro actualizado correctamente.');
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
