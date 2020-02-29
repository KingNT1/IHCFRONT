@extends('layout')
@section('scripts')
<script src="{{URL::asset('js/tournamentOperations.js')}}"></script>
@endsection

@section('content')

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide d-block w-100"
                    src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/bg-breadcrumbs-1-1920x726.jpg"
                    alt="First slide" style="height:300px;">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Crear torneo</h1>
                        <h4 class="font-weight-light">--</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
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
                            <div class="form-group col-6 font-weight-normal">
                                <!-- Name -->
                                <label for="">Fecha de inicio</label>
                                <input type="date" class="form-control mb-4" name="date-init" placeholder="Fecha inicio"
                                    min="2020-02-29" required>
                            </div>
                            <div class="form-group col-6 font-weight-normal">
                                <!-- Email -->
                                <label for="">Fecha de final</label>
                                <input type="date" class="form-control mb-4" name="date-end" placeholder="Fecha fin"
                                    min="2020-02-29" required>
                            </div>
                        </div>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4" id="deport_id" required>
                            <option value="" selected hidden disabled>Escoja su deporte</option>
                            @foreach ($deports as $d)
                            <option value="{{$d->iddeport}}">{{$d->name}}</option>
                            @endforeach
                        </select>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4" id="type_tournament" name="type-tournament"
                            required>
                            <option value="" selected hidden disabled>Escoja el tipo de torneo</option>
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
                        <div class="custom-control custom-checkbox mb-4 font-weight-light">
                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                            <label class="custom-control-label" for="defaultContactFormCopy">Enviarme una copia al
                                correo.</label>
                        </div>

                        <!-- Send button -->
                        <button class="btn btn-primary btn btn-info" type="submit">Registrar</button>

                    </form>
                    <!-- Default form contact -->
                    <br>
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
            <h5>Locales disponibles<h5>
                    <hr>
                    <div class="form-group font-weight-normal">
                        <select class="custom-select">
                            <option value="0">Selecciona un local...</option>
                            <option value="1">El Porvenir</option>
                            <option value="2">Campo de Marte</option>
                            <option value="3">El Rosario</option>
                            <option value="4">Parque Surco</option>
                        </select>
                    </div>

                    <br>
                    <h5>Premios<h5>
                            <hr>
                            <div class="form-group">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Una pequeña descripción de los premios"></textarea>
                            </div>
        </div>
    </div>

</div>
@endsection