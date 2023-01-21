<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Student data') }} actualizado
        </h2>
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg m-auto" style="width:650px;">
                <div class="container">
                    <div class="row py-0 m-auto">
                        <div class="card py-1 px-1 ">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-11 mx-auto my-auto text-center">
                                        <b>{{ Str::upper($student->nomAlumno)}}</b>
                                    </div>
                                    <div class="col-md-1">
                                        <a title="Regresar" href="{{ route('students.index', $student) }}" class="sombra btn btn-danger"><i class="bi bi-box-arrow-left"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6"><b>Nivel:</b></div><div class="col-md-6">{{ $student->nivel}}</div>
                                    <div class="col-md-6"><b>Fecha matricula:</b></div><div class="col-md-6">{{ $student->fechaMatricula}}</div>
                                    <div class="col-md-6"><b>Edad:</b></div><div class="col-md-6">{{ $student->EdadAlumno}}</div>
                                    <div class="col-md-6"><b>Genero:</b></div><div class="col-md-6">{{ $student->genero}}</div>
                                    <div class="col-md-6"><b>EPS:</b></div><div class="col-md-6">{{ $student->EPS}}</div>
                                    <div class="col-md-6"><b>Fecha de nacimiento:</b></div><div class="col-md-6">{{ $student->fechaNacimiento}}</div>
                                    <div class="col-md-6"><b>Tipo documento:</b></div><div class="col-md-6">{{ $student->documentType}}</div>
                                    <div class="col-md-6"><b>Numero documento:</b></div><div class="col-md-6">{{ $student->numDocumento}}</div>
                                    <div class="col-md-6"><b>Regimen de salud:</b></div><div class="col-md-6">{{ $student->Esalud}}</div>
                                    <div class="col-md-6"><b>Numero telefonico:</b></div><div class="col-md-6">{{ $student->numTelefonico}}</div>
                                    <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->direccionAlumno}}</div>
                                    <div class="col-md-6"><b>Barrio:</b></div><div class="col-md-6">{{ $student->barrio}}</div>
                                    <div class="col-md-6"><b>Localidad:</b></div><div class="col-md-6">{{ $student->localidad}}</div>
                                    <div class="col-md-6"><b>Nombre mama:</b></div><div class="col-md-6">{{ $student->nombreMama}}</div>
                                    <div class="col-md-6"><b>Documento mama:</b></div><div class="col-md-6">{{ $student->documentoMama}}</div>
                                    <div class="col-md-6"><b>Telefono mama:</b></div><div class="col-md-6">{{ $student->telefonoMama}}</div>
                                    <div class="col-md-6"><b>Direccion mama:</b></div><div class="col-md-6">{{ $student->direccionMama}}</div>
                                    <div class="col-md-6"><b>Nombre papa:</b></div><div class="col-md-6">{{ $student->nombrePapa}}</div>
                                    <div class="col-md-6"><b>Documento papa:</b></div><div class="col-md-6">{{ $student->documentoPapa}}</div>
                                    <div class="col-md-6"><b>Telefono papa:</b></div><div class="col-md-6">{{ $student->telefonoPapa}}</div>
                                    <div class="col-md-6"><b>Direccion papa:</b></div><div class="col-md-6">{{ $student->direccionPapa}}</div>
                                    <div class="col-md-6"><b>1er responsable:</b></div><div class="col-md-6">{{ $student->nomPriRes}}</div>
                                    <div class="col-md-6"><b>Documento:</b></div><div class="col-md-6">{{ $student->docPriRes}}</div>
                                    <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->dirPriRes}}</div>
                                    <div class="col-md-6"><b>Telefono:</b></div><div class="col-md-6">{{ $student->telPriRes}}</div>
                                    <div class="col-md-6"><b>2do responsable:</b></div><div class="col-md-6">{{ $student->nomSegRes}}</div>
                                    <div class="col-md-6"><b>Documento:</b></div><div class="col-md-6">{{ $student->docSegRes}}</div>
                                    <div class="col-md-6"><b>Direccion:</b></div><div class="col-md-6">{{ $student->dirSegRes}}</div>
                                    <div class="col-md-6"><b>Telefono:</b></div><div class="col-md-6">{{ $student->telSegRes}}</div>
                                </div>
                            </div>
                            <div class="card-footer">

                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="showModal{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content sombra bg-white">
            <div class="modal-header sombra bn-100">
            <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($student->nomAlumno)}}</h1>
            <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body sombra">
                <div class="row">
                    <div class="col-md-5">Nivel:</div><div class="col-md-7">{{ $student->nivel}}</div>
                    <div class="col-md-5">Fecha matricula:</div><div class="col-md-7">{{ $student->fechaMatricula}}</div>
                    <div class="col-md-5">Edad:</div><div class="col-md-7">{{ $student->EdadAlumno}}</div>
                    <div class="col-md-5">Genero:</div><div class="col-md-7">{{ $student->genero}}</div>
                    <div class="col-md-5">EPS:</div><div class="col-md-7">{{ $student->EPS}}</div>
                    <div class="col-md-5">Fecha de nacimiento:</div><div class="col-md-7">{{ $student->fechaNacimiento}}</div>
                    <div class="col-md-5">Tipo documento:</div><div class="col-md-7">{{ $student->documentType}}</div>
                    <div class="col-md-5">Numero documento:</div><div class="col-md-7">{{ $student->numDocumento}}</div>
                    <div class="col-md-5">Regimen de salud:</div><div class="col-md-7">{{ $student->Esalud}}</div>
                    <div class="col-md-5">Numero telefonico:</div><div class="col-md-7">{{ $student->numTelefonico}}</div>
                    <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->direccionAlumno}}</div>
                    <div class="col-md-5">Barrio:</div><div class="col-md-7">{{ $student->barrio}}</div>
                    <div class="col-md-5">Localidad:</div><div class="col-md-7">{{ $student->localidad}}</div>
                    <div class="col-md-5">Nombre mama:</div><div class="col-md-7">{{ $student->nombreMama}}</div>
                    <div class="col-md-5">Documento mama:</div><div class="col-md-7">{{ $student->documentoMama}}</div>
                    <div class="col-md-5">Telefono mama:</div><div class="col-md-7">{{ $student->telefonoMama}}</div>
                    <div class="col-md-5">Direccion mama:</div><div class="col-md-7">{{ $student->direccionMama}}</div>
                    <div class="col-md-5">Nombre papa:</div><div class="col-md-7">{{ $student->nombrePapa}}</div>
                    <div class="col-md-5">Documento papa:</div><div class="col-md-7">{{ $student->documentoPapa}}</div>
                    <div class="col-md-5">Telefono papa:</div><div class="col-md-7">{{ $student->telefonoPapa}}</div>
                    <div class="col-md-5">Direccion papa:</div><div class="col-md-7">{{ $student->direccionPapa}}</div>
                    <div class="col-md-5">Primer responsable:</div><div class="col-md-7">{{ $student->nomPriRes}}</div>
                    <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $student->docPriRes}}</div>
                    <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->dirPriRes}}</div>
                    <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $student->telPriRes}}</div>
                    <div class="col-md-5">Segundo responsable:</div><div class="col-md-7">{{ $student->nomSegRes}}</div>
                    <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $student->docSegRes}}</div>
                    <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $student->dirSegRes}}</div>
                    <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $student->telSegRes}}</div>
                </div>
            </div>
            <div class="modal-footer bn-100">
            <button type="button" class=" sombra btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
