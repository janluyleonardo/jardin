<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students') }}
        </h2>
    </x-slot>

    {{ $mensaje }}
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row py-0">
                        <div class="col-md-6 mx-auto py-4">
                            <div class="card bg-light ">
                                <div class="card-header">
                                    <div class="row">
                                        <div class="col-md-6">{{__('Records in database')}}</div>
                                        <div class="col-md-6" >
                                            <form action="{{route('Students')}}" method="get">
                                                <div class="row form-row">
                                                    <div class="col-md-8 my-1">
                                                        <input type="text" class="form-control" name="texto" id="texto" value="{{$student}}">
                                                    </div>
                                                    <div class="col-md-4 my-1">
                                                        <input type="submit" class="sombra btn btn-primary" value="Buscar">
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table align-middle table-striped table-hover table-sm">
                                            @if (count($estudiantes) <= 0)
                                                <thead>
                                                    <tr>
                                                        <th colspan="6" align="center">
                                                            <center>El estudiante "{{ $texto }}" que esta buscano no existe en la base de datos</center>
                                                        </th>
                                                    </tr>
                                                </thead>
                                            @else
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>{{ __('Name') }}</th>
                                                        <th>{{ __('Actions') }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php $i = 1; ?>
                                                    @foreach ($estudiantes as $estudiante)
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>{{ $estudiante->nomAlumno }}</td>
                                                            <td>
                                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                                    <a class="sombra btn btn-info" href="#" data-bs-toggle="modal" data-bs-target="#showModal{{$estudiante->id}}"><i class="bi bi-eye"></i></a>
                                                                    <a class="sombra btn btn-warning" href="#" data-bs-toggle="modal" data-bs-target="#editModal{{$estudiante->id}}"><i class="bi bi-pencil"></i></a>
                                                                    <a class="sombra btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{$estudiante->id}}"><i class="bi bi-trash"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php $i += +1; ?>
                                                        <!-- Modal show-->
                                                        <div class="modal fade" id="showModal{{$estudiante->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content sombra bg-white">
                                                                <div class="modal-header sombra bn-100">
                                                                <h1 class="modal-title fs-5 mx-auto" id="exampleModalLabel">{{ Str::upper($estudiante->nomAlumno)}}</h1>
                                                                <button type="button" class="btn-close sombra" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-md-5">Nivel:</div><div class="col-md-7">{{ $estudiante->nivel}}</div>
                                                                        <div class="col-md-5">Fecha matricula:</div><div class="col-md-7">{{ $estudiante->fechaMatricula}}</div>
                                                                        <div class="col-md-5">Edad:</div><div class="col-md-7">{{ $estudiante->EdadAlumno}}</div>
                                                                        <div class="col-md-5">Genero:</div><div class="col-md-7">{{ $estudiante->genero}}</div>
                                                                        <div class="col-md-5">EPS:</div><div class="col-md-7">{{ $estudiante->EPS}}</div>
                                                                        <div class="col-md-5">Fecha de nacimiento:</div><div class="col-md-7">{{ $estudiante->fechaNacimiento}}</div>
                                                                        <div class="col-md-5">Tipo documento:</div><div class="col-md-7">{{ $estudiante->documentType}}</div>
                                                                        <div class="col-md-5">Numero documento:</div><div class="col-md-7">{{ $estudiante->numDocumento}}</div>
                                                                        <div class="col-md-5">Regimen de salud:</div><div class="col-md-7">{{ $estudiante->Esalud}}</div>
                                                                        <div class="col-md-5">Numero telefonico:</div><div class="col-md-7">{{ $estudiante->numTelefonico}}</div>
                                                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $estudiante->direccionAlumno}}</div>
                                                                        <div class="col-md-5">Barrio:</div><div class="col-md-7">{{ $estudiante->barrio}}</div>
                                                                        <div class="col-md-5">Localidad:</div><div class="col-md-7">{{ $estudiante->localidad}}</div>
                                                                        <div class="col-md-5">Nombre mama:</div><div class="col-md-7">{{ $estudiante->nombreMama}}</div>
                                                                        <div class="col-md-5">Documento mama:</div><div class="col-md-7">{{ $estudiante->documentoMama}}</div>
                                                                        <div class="col-md-5">Telefono mama:</div><div class="col-md-7">{{ $estudiante->telefonoMama}}</div>
                                                                        <div class="col-md-5">Direccion mama:</div><div class="col-md-7">{{ $estudiante->direccionMama}}</div>
                                                                        <div class="col-md-5">Nombre papa:</div><div class="col-md-7">{{ $estudiante->nombrePapa}}</div>
                                                                        <div class="col-md-5">Documento papa:</div><div class="col-md-7">{{ $estudiante->documentoPapa}}</div>
                                                                        <div class="col-md-5">Telefono papa:</div><div class="col-md-7">{{ $estudiante->telefonoPapa}}</div>
                                                                        <div class="col-md-5">Direccion papa:</div><div class="col-md-7">{{ $estudiante->direccionPapa}}</div>
                                                                        <div class="col-md-5">Primer responsable:</div><div class="col-md-7">{{ $estudiante->nomPriRes}}</div>
                                                                        <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $estudiante->docPriRes}}</div>
                                                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $estudiante->dirPriRes}}</div>
                                                                        <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $estudiante->telPriRes}}</div>
                                                                        <div class="col-md-5">Segundo responsable:</div><div class="col-md-7">{{ $estudiante->nomSegRes}}</div>
                                                                        <div class="col-md-5">Documento:</div><div class="col-md-7">{{ $estudiante->docSegRes}}</div>
                                                                        <div class="col-md-5">Direccion:</div><div class="col-md-7">{{ $estudiante->dirSegRes}}</div>
                                                                        <div class="col-md-5">Telefono:</div><div class="col-md-7">{{ $estudiante->telSegRes}}</div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer bn-100">
                                                                <button type="button" class=" sombra btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal edit-->
                                                        <div class="modal fade" id="editModal{{$estudiante->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title editar a:{{ $estudiante->nomAlumno }}</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal delete-->
                                                        <div class="modal fade" id="deleteModal{{$estudiante->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title eliminar a:{{ $estudiante->nomAlumno }}</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                ...
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <td colspan="6">
                                                            {{$estudiantes->links()}}
                                                        </td>
                                                    </tr>
                                                </tfoot>
                                            @endif
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
