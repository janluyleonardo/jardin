<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Incomes') }}
        </h2>
    </x-slot>

    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 block">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="form-group">
                                <form action="" method="post">
                                    <label>Datos generales:</label>
                                    <div class="input-group">
                                        <input name="Direccion" id="Direccion" type="text" required class="form-control" placeholder="Direccion de residencia">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="Barrio" id="Barrio" type="text" required class="form-control" placeholder="Barrio de residencia">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="Localidad" id="">
                                            <option>Localidad</option>
                                            <option value="Usaquén">Usaquén</option>
                                            <option value="Chapinero">Chapinero</option>
                                            <option value="Santa">Santa Fe</option>
                                            <option value="San">San Cristóbal</option>
                                            <option value="Usme">Usme</option>
                                            <option value="Tunjuelito">Tunjuelito</option>
                                            <option value="Bosa">Bosa</option>
                                            <option value="Kennedy">Kennedy</option>
                                            <option value="Fontibón">Fontibón</option>
                                            <option value="Engativá">Engativá</option>
                                            <option value="Suba">Suba</option>
                                            <option value="Barrios">Barrios Unidos</option>
                                            <option value="Teusaquillo">Teusaquillo</option>
                                            <option value="Los">Los Mártires</option>
                                            <option value="Antonio">Antonio Nariño</option>
                                            <option value="Puente">Puente Aranda</option>
                                            <option value="Candelaria">Candelaria</option>
                                            <option value="Rafael">Rafael Uribe Uribe</option>
                                            <option value="Ciudad">Ciudad Bolívar</option>
                                            <option value="Sumapaz">Sumapaz</option>
                                        </select>
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="Localidad" id="">
                                            <option value="">Tipo de vivienda</option>
                                            <option value="">Propia</option>
                                            <option value="">Familiar</option>
                                            <option value="">Arrendada</option>
                                        </select>
                                    </div>
                                    <div class="input-group py-1">
                                        <input name="FechaNacimiento" id="FechaNacimiento" type="date" required class="form-control" placeholder="Fecha de Nacimiento">
                                    </div>
                                    <br><hr>
                                    <label>Datos del menor:</label>
                                    <div class="input-group">
                                        <input name="NombresMenor" id="Nombres" type="text" required class="form-control" placeholder="Nombres">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="ApellidosMenor" id="Apellidos" type="text" required class="form-control" placeholder="Apellidos">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="Genero" id="">
                                            <option value="">Genero</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                    <label for="FechaNacimiento">Fecha de nacimiento:</label>
                                    <div class="input-group py-1">
                                        <input name="FechaNacimientoMenor" id="FechaNacimiento" type="date" required class="form-control" placeholder="Fecha de Nacimiento">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="NumeroDocumentoMenor" id="NumeroDocumento" type="number" required class="form-control" placeholder="N° Documento">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="TipoDocumentoMenor" id="">
                                            <option value="">Tipo Documento</option>
                                            <option>Registro civil de nacimiento</option>
                                            <option>Tarjeta de identidad</option>
                                            <option>Cédula de ciudadanía</option>
                                            <option>Tarjeta de extranjería</option>
                                            <option>Cédula de extranjería</option>
                                            <option>NIT</option>
                                            <option>Pasaporte</option>
                                        </select>
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="EdadMenor" id="Edad" type="number" required class="form-control" placeholder="Edad">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="EPSMenor" id="EPS" type="number" required class="form-control" placeholder="EPS">
                                    </div>
                                    <br><hr>
                                    <label>Datos del padre:</label>
                                    <div class="input-group">
                                        <input name="NombresPadre" id="Nombres" type="text" required class="form-control" placeholder="Nombres del padre">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="ApellidosPadre" id="Apellidos" type="text" required class="form-control" placeholder="Apellidos del padre">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="GeneroPadre" id="">
                                            <option value="">Genero del padre</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="input-group py-1">
                                        <input name="NumeroDocumentoPadre" id="NumeroDocumento" type="number" required class="form-control" placeholder="N° Documento">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="TipoDocumentoPadre" id="">
                                            <option value="">Tipo Documento del padre</option>
                                            <option>Registro civil de nacimiento</option>
                                            <option>Tarjeta de identidad</option>
                                            <option>Cédula de ciudadanía</option>
                                            <option>Tarjeta de extranjería</option>
                                            <option>Cédula de extranjería</option>
                                            <option>NIT</option>
                                            <option>Pasaporte</option>
                                        </select>
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="FechaNacimiento" id="FechaNacimiento" type="date" required class="form-control" placeholder="Fecha de Nacimiento">
                                    </div>
                                    <br><hr>
                                    <label>Datos de la madre:</label>
                                    <div class="input-group">
                                        <input name="Nombres" id="Nombres" type="text" required class="form-control" placeholder="Nombres">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="Apellidos" id="Apellidos" type="text" required class="form-control" placeholder="Apellidos">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="Genero" id="">
                                            <option value="">Genero</option>
                                            <option value="M">Masculino</option>
                                            <option value="F">Femenino</option>
                                        </select>
                                    </div>
                                    <div class="input-group py-1">
                                        <input name="NumeroDocumento" id="NumeroDocumento" type="number" required class="form-control" placeholder="N° Documento">
                                        <span class="input-group-addon">&nbsp;</span>
                                        <select name="TipoDocumento" id="">
                                            <option value="">Tipo Documento</option>
                                            <option>Registro civil de nacimiento</option>
                                            <option>Tarjeta de identidad</option>
                                            <option>Cédula de ciudadanía</option>
                                            <option>Tarjeta de extranjería</option>
                                            <option>Cédula de extranjería</option>
                                            <option>NIT</option>
                                            <option>Pasaporte</option>
                                        </select>
                                        <span class="input-group-addon">&nbsp;</span>
                                        <input name="FechaNacimiento" id="FechaNacimiento" type="date" required class="form-control" placeholder="Fecha de Nacimiento">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
