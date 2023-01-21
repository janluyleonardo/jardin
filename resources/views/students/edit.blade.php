<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('edit student') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row py-0">
            <div class="col-md-6 mx-auto py-4">
                <div class="card">
                    <div class="form-body">
                        <div class="row">
                            <div class="form-holder">
                                <div class="form-content">
                                    <div class="form-items">
                                        <form action="{{ route('students.update', $student) }}" method="post"class="requires-validation" novalidate>
                                            @method('put')
                                            @csrf
                                            <div class="input-group">
                                                <div class="col-md-8 pt-4">
                                                    @php
                                                        $salaCunaCheck = $student->nivel=="SALA-CUNA" ? 'checked' : '';
                                                        $parvulosCheck = $student->nivel=="PARVULOS" ? 'checked' : '';
                                                        $perKinderCheck = $student->nivel=="PRE-KINDER" ? 'checked' : '';
                                                        $kinderCheck = $student->nivel=="KINDER" ? 'checked' : '';
                                                    @endphp
                                                    <input type="radio" class="btn-check" name="nivel" id="SALA-CUNA" value="SALA-CUNA" autocomplete="off" {{$salaCunaCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="SALA-CUNA">SALA-CUNA</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="PARVULOS" value="PARVULOS" autocomplete="off" {{$parvulosCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="PARVULOS">PARVULOS</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="PRE-KINDER" value="PRE-KINDER" autocomplete="off" {{$perKinderCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="PRE-KINDER">PRE-KINDER</label>
                                                    <input type="radio" class="btn-check" name="nivel" id="KINDER" value="KINDER" autocomplete="off" {{$kinderCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="KINDER">KINDER</label>
                                                    <div class="valid-feedback mv-up">You selected a nivel!</div>
                                                    <div class="invalid-feedback mv-up">Please select a nivel!</div>
                                                    Nivel de matricula
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control" type="text" name="fechaMatricula" id="" value="{{ old('fechaMatricula', $student->fechaMatricula) }}" readonly required>
                                                    <div class="valid-feedback mv-up">You selected a fecha de matricula!</div>
                                                    <div class="invalid-feedback mv-up">Please select a fecha de matricula!</div>
                                                    Fecha de{{ __('Registration') }}
                                                </div>
                                            </div>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)">
                                                {{ __('Informacion del(a) niño(a)') }}</div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="text" name="nomAlumno" placeholder="{{ __('Full Name') }}" value="{{ old('nomAlumno', $student->nomAlumno) }}" required>
                                                <div class="valid-feedback">Username field is valid!</div>
                                                <div class="invalid-feedback">Username field cannot be blank!</div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-md-4 my-auto mt-3">
                                                    <input class="form-control" type="date" name="fechaNacimiento" id="fechaNacimiento" onblur="edad()" value="{{ old('fechaNacimiento', $student->fechaNacimiento) }}" required>
                                                    <div class="valid-feedback mv-up">You selected a fecha de nacimiento!</div>
                                                    <div class="invalid-feedback mv-up">Please select a fecha de nacimiento!</div>
                                                    Fecha de nacimiento
                                                </div>
                                                <div class="col-md-4 my-auto mt-3">
                                                    @php
                                                        $femCheck = $student->genero=="Masculino" ? 'checked' : '';
                                                        $masCheck = $student->genero=="Femenino" ? 'checked' : '';
                                                    @endphp
                                                    <center>
                                                        <input type="radio" class="btn-check"  name="genero" id="masc" value="Masculino" {{$femCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="masc"><i><img src="{{asset('images/icono-niño.png')}}" alt="icono-niño" width="45px"></i></label>
                                                        <input type="radio" class="btn-check" name="genero" id="fem" value="Femenino" {{$masCheck}}>
                                                        <label class="btn btn-sm btn-outline-secondary" for="fem"><i><img src="{{asset('images/icono-niña.png')}}" alt="icono-niña" width="45px"></i></label>
                                                        <div class="valid-feedback">Gender field is valid!</div>
                                                        <div class="invalid-feedback">Gender field cannot be blank!</div>
                                                    </center>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control" type="text" name="EPS" placeholder="EPS" value="{{ old('EPS', $student->EPS) }}" required>
                                                    <div class="valid-feedback">EPS field is valid!</div>
                                                    <div class="invalid-feedback">EPS field cannot be blank!</div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-md-4 my-auto ">
                                                    <input class="form-control" type="text" name="EdadAlumno" id="EdadAlumno" placeholder="Edad" value="{{ old('EdadAlumno', $student->EdadAlumno) }}" readonly required>
                                                    <div class="valid-feedback">Edad field is valid!</div>
                                                    <div class="invalid-feedback">Edad field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-4 my-auto mt-4">
                                                    @php
                                                        $nuipCheck = $student->documentType=="NUIP" ? 'checked' : '';
                                                        $rcCheck = $student->documentType=="RC" ? 'checked' : '';
                                                    @endphp
                                                    <center>
                                                        <input type="radio" class="btn-check" name="documentType" id="documentTypeNuip" value="NUIP" {{$nuipCheck}} required>
                                                        <label class="btn btn-sm btn-outline-secondary" for="documentTypeNuip">NUIP</label>
                                                        <input type="radio" class="btn-check" name="documentType" id="documentTypeRc" value="RC" {{$rcCheck}}>
                                                        <label class="btn btn-sm btn-outline-secondary" for="documentTypeRc">RC</label>
                                                        <div class="valid-feedback">Tipo documento field is valid!</div>
                                                        <div class="invalid-feedback">Tipo documento field cannot be blank!
                                                        </div><br>
                                                        Tipo documento
                                                    </center>
                                                </div>
                                                <div class="col-md-4 my-auto mt-4">
                                                    <input class="form-control" type="number" name="numDocumento"placeholder="N° documento" value="{{ old('numDocumento', $student->numDocumento) }}" required>
                                                    <div class="valid-feedback">Numero de documento field is valid!
                                                    </div>
                                                    <div class="invalid-feedback">Numero de documento field cannot be blank!</div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-md-8 mt-1 pt-3">
                                                    @php
                                                        $epsCheck = $student->Esalud=="EPS" ? 'checked' : '';
                                                        $arsCheck = $student->Esalud=="ARS" ? 'checked' : '';
                                                        $vinCheck = $student->Esalud=="VINCULADO" ? 'checked' : '';
                                                    @endphp
                                                    Reg de salud:
                                                    <input type="radio" class="btn-check" name="Esalud" id="EPS" value="EPS" autocomplete="off" {{$epsCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="EPS">EPS</label>

                                                    <input type="radio" class="btn-check" name="Esalud" id="ARS" value="ARS" autocomplete="off" {{$arsCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="ARS">ARS</label>

                                                    <input type="radio" class="btn-check" name="Esalud" id="VINCULADO" value="VINCULADO" autocomplete="off" {{$vinCheck}} required>
                                                    <label class="btn btn-sm btn-outline-secondary" for="VINCULADO">VINCULADO</label>

                                                    <div class="valid-feedback mv-up">You selected a regimen de salud de salud!</div>
                                                    <div class="invalid-feedback mv-up">Please select a regimen de salud de salud!</div>
                                                </div>
                                                <div class="col-md-4 mt-3">
                                                    <input class="form-control" type="number" name="numTelefonico"placeholder="N° telefono" value="{{ old('numTelefonico', $student->numTelefonico) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                            </div>

                                            <div class="input-group">
                                                <div class="col-md-12 ">
                                                    <input class="form-control" type="text" name="direccionAlumno"placeholder="Direccion" value="{{ old('direccionAlumno', $student->direccionAlumno) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="barrio"placeholder="Barrio" value="{{ old('barrio', $student->barrio) }}" required>
                                                    <div class="valid-feedback">Barrio field is valid!</div>
                                                    <div class="invalid-feedback">Barrio field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-5">
                                                    <input class="form-control" type="text" name="localidad"placeholder="Localidad" value="{{ old('localidad', $student->localidad) }}" required>
                                                    <div class="valid-feedback">Localidad field is valid!</div>
                                                    <div class="invalid-feedback">Localidad field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Informacion de la Madre') }}</div>
                                            <div class="input-group">
                                                <div class="col-md-6">
                                                    <input class="form-control" type="text" name="nombreMama" placeholder="Nombre completo" value="{{ old('nombreMama', $student->nombreMama) }}"  required>
                                                    <div class="valid-feedback">Nombre field is valid!</div>
                                                    <div class="invalid-feedback">Nombre field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-5 my-auto mt-3">
                                                    <input class="form-control" type="number" name="documentoMama"placeholder="Nº documento" value="{{ old('documentoMama', $student->documentoMama) }}" required>
                                                    <div class="valid-feedback">Nº documento mama field is valid!</div>
                                                    <div class="invalid-feedback">Nº documento mama field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-4 my-auto mt-3">
                                                    <input class="form-control" type="number" name="telefonoMama" placeholder="Nº telefonico" value="{{ old('telefonoMama', $student->telefonoMama) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" name="direccionMama"placeholder="Direccion" value="{{ old('direccionMama', $student->direccionMama) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Informacion del Padre') }}</div>
                                            <div class="input-group">
                                                <div class="col-md-6">
                                                    <input class="form-control" type="text" name="nombrePapa"placeholder="Nombre completo" value="{{ old('nombrePapa', $student->nombrePapa) }}" required>
                                                    <div class="valid-feedback">Nombre field is valid!</div>
                                                    <div class="invalid-feedback">Nombre field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-5">
                                                    <input class="form-control my-auto mt-3" type="number" name="documentoPapa"placeholder="Nº documento" value="{{ old('documentoPapa', $student->documentoPapa) }}" required>
                                                    <div class="valid-feedback">Documento field is valid!</div>
                                                    <div class="invalid-feedback">Documento field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-4">
                                                    <input class="form-control my-auto mt-3" type="number" name="telefonoPapa" placeholder="Nº telefonico" value="{{ old('telefonoPapa', $student->telefonoPapa) }}" required>
                                                    <div class="valid-feedback">Telefono field is valid!</div>
                                                    <div class="invalid-feedback">Telefono field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-1"></div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" name="direccionPapa" placeholder="Direccion" value="{{ old('direccionPapa', $student->direccionPapa) }}" required>
                                                    <div class="valid-feedback">Direccion field is valid!</div>
                                                    <div class="invalid-feedback">Direccion field cannot be blank! </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Informacion de los responsables') }}</div>
                                            <div class="input-group">
                                                <div class="col-md-5">
                                                    <br>
                                                    <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Primer responsable') }}</div>
                                                    <input class="form-control" type="text" name="nomPriRes"placeholder="Apellido(s) y nombre(s)" value="{{ old('nomPriRes', $student->nomPriRes) }}" required>
                                                    <div class="valid-feedback">Nombre 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Nombre 1er responsable field cannot be blank!</div>
                                                    <input class="form-control my-auto mt-3" type="number" name="docPriRes"placeholder="N° documento" value="{{ old('docPriRes', $student->docPriRes) }}" required>
                                                    <div class="valid-feedback">Documento 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 1er responsable field cannot be blank!</div>
                                                    <input class="form-control" type="text" name="dirPriRes"placeholder="Direccion" value="{{ old('dirPriRes', $student->dirPriRes) }}" required>
                                                    <div class="valid-feedback">Direccion 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 1er responsable field cannot be blank!</div>
                                                    <input class="form-control my-auto mt-3" type="number" name="telPriRes" placeholder="N° telefono" value="{{ old('telPriRes', $student->telPriRes) }}" required>
                                                    <div class="valid-feedback">Telefono 1er responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 1er responsable field cannot be blank!</div>
                                                </div>
                                                <div class="col-md-2"></div>
                                                <div class="col-md-5">
                                                    <br>
                                                    <div class="col-md-12" style="background-color: rgba(0, 0, 0, 0.068); border-bottom: 1px solid rgba(0, 0, 0, 0.5)"> {{ __('Segundo responsable') }}</div>
                                                    <input class="form-control" type="text" name="nomSegRes"placeholder="Apellido(s) y nombre(s)" value="{{ old('nomSegRes', $student->nomSegRes) }}" required>
                                                    <div class="valid-feedback">Nombre 2do responsable is valid!</div>
                                                    <div class="invalid-feedback">Nombre 2do responsable cannot be blank!</div>
                                                    <input class="form-control my-auto mt-3" type="number" name="docSegRes"placeholder="N° documento" value="{{ old('docSegRes', $student->docSegRes) }}" required>
                                                    <div class="valid-feedback">Documento 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Documento 2do responsable field cannot be blank!</div>
                                                    <input class="form-control" type="text" name="dirSegRes"placeholder="Direccion" value="{{ old('dirSegRes', $student->dirSegRes) }}" required>
                                                    <div class="valid-feedback">Direccion 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Direccion 2do responsable field cannot be blank!</div>
                                                    <input class="form-control my-auto mt-3" type="number" name="telSegRes"placeholder="N° telefono" value="{{ old('telSegRes', $student->telSegRes) }}" required>
                                                    <div class="valid-feedback">Telefono 2do responsable field is valid!</div>
                                                    <div class="invalid-feedback">Telefono 2do responsable field cannot be blank!</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mx-auto">
                                                <div class="form-button mt-3 ">
                                                    <button id="submit" type="submit" class="sombra btn btn-secondary">{{ __('edit student') }}</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function edad() {
            var fecha = document.getElementById("fechaNacimiento").value;
            // Si la fecha es correcta, calculamos la edad

            var values = fecha.split("-");
            var dia = values[2];
            var mes = values[1];
            var ano = values[0];

            // cogemos los valores actuales
            var fecha_hoy = new Date();
            var ahora_ano = fecha_hoy.getYear();
            var ahora_mes = fecha_hoy.getMonth() + 1;
            var ahora_dia = fecha_hoy.getDate();

            // realizamos el calculo
            var edad = (ahora_ano + 1900) - ano;
            if (ahora_mes < mes) {
                edad--;
            }
            if ((mes == ahora_mes) && (ahora_dia < dia)) {
                edad--;
            }
            if (edad > 1900) {
                edad -= 1900;
            }

            // calculamos los meses
            var meses = 0;

            if (ahora_mes > mes && dia > ahora_dia)
                meses = ahora_mes - mes - 1;
            else if (ahora_mes > mes)
                meses = ahora_mes - mes
            if (ahora_mes < mes && dia < ahora_dia)
                meses = 12 - (mes - ahora_mes);
            else if (ahora_mes < mes)
                meses = 12 - (mes - ahora_mes + 1);
            if (ahora_mes == mes && dia > ahora_dia)
                meses = 11;

            // calculamos los dias
            var dias = 0;
            if (ahora_dia > dia)
                dias = ahora_dia - dia;
            if (ahora_dia < dia) {
                ultimoDiaMes = new Date(ahora_ano, ahora_mes - 1, 0);
                dias = ultimoDiaMes.getDate() - (dia - ahora_dia);
            }
            var edadFinal = edad + " años, " + meses + " meses y " + dias + " días"
            document.getElementById("EdadAlumno").value = edadFinal;
        }
    </script>
</x-app-layout>
