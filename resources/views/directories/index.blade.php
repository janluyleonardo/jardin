<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Students Directory') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-1"></div>
                        <div class="col-md-2"><b>Alumno</b></div>
                        <div class="col-md-2"><b>Madre alumno</b></div>
                        <div class="col-md-2"><b>Padre alumno</b></div>
                        <div class="col-md-2"><b>1er respondiente</b></div>
                        <div class="col-md-2"><b>2do respondiente</b></div>
                        <div class="col-md-1"></div>
                        @foreach ($students as $student)
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;border-left: 1px solid #000;border-top-left-radius: 10px;border-bottom-left-radius: 10px;margin-bottom:5px;">{{ Str::title($student->nomAlumno) }}</div>
                            <div class="col-md-2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;margin-bottom:5px;">
                                <div class="col-md-12">{{$student->nombreMama}}</div>
                                <div class="col-md-12">{{ $student->telefonoMama}}</div>
                            </div>
                            <div class="col-md-2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;margin-bottom:5px;">
                                <div class="col-md-12">{{$student->nombrePapa}}</div>
                                <div class="col-md-12">{{ $student->telefonoPapa}}</div>
                            </div>
                            <div class="col-md-2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;margin-bottom:5px;">
                                <div class="col-md-12">{{$student->nomPriRes}}</div>
                                <div class="col-md-12">{{ $student->telPriRes}}</div>
                            </div>
                            <div class="col-md-2" style="border-top: 1px solid #000;border-bottom: 1px solid #000;border-right: 1px solid #000;border-top-right-radius: 10px;border-bottom-right-radius: 10px;margin-bottom:5px;">
                                <div class="col-md-12">{{ $student->nomSegRes}}</div>
                                <div class="col-md-12">{{ $student->telSegRes}}</div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
