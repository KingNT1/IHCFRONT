@extends('layout')

@section('content')

<div class="container">
    {{--Tournament cards--}}
    <div class="row">
        <div class="col-8">
            <br>
            <h5>Brindenos algunos datos para crear su torneo<h5>
                    <hr>
                    <!-- Default form contact -->
                    <form method="POST" class="text-center border border-light p-5"
                        action="{{ route('tournament.save') }}">
                        @csrf
                        @method('POST')

                        <!-- Alias -->
                        <input type="text" id="defaultContactFormName" name="name" class="form-control mb-4"
                            placeholder="Nombre o Alias del torneo" required>

                        <div class="row">
                            <div class="form-group col-6">
                                <!-- Name -->
                                <label for="">Fecha de inicio</label>
                                <input type="date" class="form-control mb-4" name="date-init" placeholder="Fecha inicio"
                                    required>
                            </div>
                            <div class="form-group col-6">
                                <!-- Email -->
                                <label for="">Fecha de final</label>
                                <input type="date" class="form-control mb-4" name="date-end" placeholder="Fecha fin"
                                    required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4" id="deport_id" required>
                            <option value="" selected disabled>Escoja su deporte</option>
                            @foreach ($deports as $d)
                            <option value="{{$d->iddeport}}">{{$d->name}}</option>
                            @endforeach
                        </select>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4" name="type_tournament" required>
                            <option value="" selected disabled>Escoja el tipo de torneo</option>
                            <option value="1">Liga</option>
                            <option value="2">Copa</option>
                            <option value="3">Mini Campeonato</option>
                            <option value="4">Amistoso</option>
                        </select>


                        <label for="">Clase de torneo</label>
                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4" name="type" required>
                            <option value="1" selected>Público</option>
                            <option value="2">Privado</option>
                        </select>

                        <!-- Message -->
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" name="description"
                                rows="6" placeholder="Descripción del torneo"></textarea>
                        </div>

                        <!-- Copy -->
                        <div class="custom-control custom-checkbox mb-4">
                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                            <label class="custom-control-label" for="defaultContactFormCopy">Enviarme una copia al
                                correo.</label>
                        </div>

                        <!-- Send button -->
                        <button class="btn btn-primary btn-block" type="submit">Registrar</button>

                    </form>
                    <!-- Default form contact -->

                    {{--Advisement jumbotron--}}
                    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
                        <div class="col-md-6 px-0">
                            <h1 class="display-4 font-italic">Plataforma especializada en torneos</h1>
                            <p class="lead my-3">Tus encuentros de fútbol realizados de una manera más organizada.</p>
                            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continua leyendo...</a>
                            </p>
                        </div>
                    </div>
                    {{--End--}}

        </div>
        <div class="col-4">
            <br>
            <h5>Equipos disponibles<h5>

        </div>
    </div>

</div>
@endsection
