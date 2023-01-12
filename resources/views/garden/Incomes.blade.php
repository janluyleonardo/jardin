<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Files') }}
        </h2>
    </x-slot>
    <div class="container">
        <div class="row py-4">
            <div class="col-md-6 mx-auto py-4">
            <div class="card">
                <div class="form-body">
                    <div class="row">
                        <div class="form-holder">
                            <div class="form-content">
                                <div class="form-items">
                                    <form action="{{route('prueba')}}" method="post"class="requires-validation" novalidate>
                                        @csrf
                                    <div class="input-group">
                                        <div class="col-md-6""><h3>{{__('Registration')}}</h3></div>
                                        <div class="col-md-6 form-check-reverse">
                                            <input class="form-control" type="date" name="fechaMatricula" id="" required>
                                            <div class="valid-feedback mv-up">You selected a fecha de matricula!</div>
                                            <div class="invalid-feedback mv-up">Please select a fecha de matricula!</div>
                                            Fecha de {{__('Registration')}}
                                        </div>
                                    </div>
                                        <div class="col-md-12 mt-1">
                                            <label class="mb-3 mr-1" for="nivel">Nivel: </label>

                                            <input type="radio" class="btn-check" name="nivel" id="SALA-CUNA" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="SALA-CUNA">SALA-CUNA</label>

                                            <input type="radio" class="btn-check" name="nivel" id="PARVULOS" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="PARVULOS">PARVULOS</label>

                                            <input type="radio" class="btn-check" name="nivel" id="PRE-KINDER" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="PRE-KINDER">PRE-KINDER</label>

                                            <input type="radio" class="btn-check" name="nivel" id="KINDER" autocomplete="off" required>
                                            <label class="btn btn-sm btn-outline-secondary" for="KINDER">KINDER</label>
                                            <div class="valid-feedback mv-up">You selected a nivel!</div>
                                            <div class="invalid-feedback mv-up">Please select a nivel!</div>
                                        </div>
                                        <div class="col-md-12">{{__('Informacion del(a) niño(a)')}}</div>
                                        <div class="col-md-12">
                                            <input class="form-control" type="text" name="name" placeholder="{{__('Full Name')}}" required>
                                            <div class="valid-feedback">Username field is valid!</div>
                                            <div class="invalid-feedback">Username field cannot be blank!</div>
                                        </div>

                                        <div class="input-group">
                                            <div class="col-md-4 my-auto mt-3">
                                                <input class="form-control" type="number" min="1" max="5" name="Edad" placeholder="Edad" required>
                                                <div class="valid-feedback">Edad field is valid!</div>
                                                <div class="invalid-feedback">Edad field cannot be blank!</div>
                                            </div>
                                            <div class="col-md-4 my-auto mt-4">
                                                <center>
                                                    genero:
                                                    <label for="genero">M</label>
                                                    <input type="radio" name="genero" id="genero" value="M" required>
                                                    <label for="genero">F</label>
                                                    <input type="radio" name="genero" id="genero" value="F">
                                                    <div class="valid-feedback">Gender field is valid!</div>
                                                    <div class="invalid-feedback">Gender field cannot be blank!</div>
                                                </center>
                                            </div>
                                            <div class="col-md-4">
                                                <input class="form-control" type="text" name="EPS" placeholder="EPS" required>
                                            <div class="valid-feedback">EPS field is valid!</div>
                                            <div class="invalid-feedback">EPS field cannot be blank!</div>
                                            </div>
                                        </div>

                                       <div class="col-md-12">
                                            <select class="form-select mt-3" required>
                                                  <option selected disabled value="">Position</option>
                                                  <option value="jweb">Junior Web Developer</option>
                                                  <option value="sweb">Senior Web Developer</option>
                                                  <option value="pmanager">Project Manager</option>
                                           </select>
                                            <div class="valid-feedback">You selected a position!</div>
                                            <div class="invalid-feedback">Please select a position!</div>
                                       </div>


                                       <div class="col-md-12">
                                          <input class="form-control" type="password" name="password" placeholder="Password" required>
                                           <div class="valid-feedback">Password field is valid!</div>
                                           <div class="invalid-feedback">Password field cannot be blank!</div>
                                       </div>




                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                      <label class="form-check-label">I confirm that all data are correct</label>
                                     <div class="invalid-feedback">Please confirm that the entered data are all correct!</div>
                                    </div>


                                        <div class="form-button mt-3">
                                            <button id="submit" type="submit" class="btn btn-primary">Register</button>
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
</x-app-layout>
