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
                    <form class="text-center border border-light p-5" action="#!">

                        <!-- Alias -->
                        <input type="text" id="defaultContactFormName" class="form-control mb-4"
                            placeholder="Nombre o Alias del torneo">

                        <div class="row">
                            <div class="form-group col-6">
                                <!-- Name -->
                                <input type="text" id="defaultContactFormEmail" class="form-control mb-4"
                                    placeholder="Responsable">
                            </div>
                            <div class="form-group col-6">
                                <!-- Email -->
                                <input type="email" id="defaultContactFormEmail" class="form-control mb-4"
                                    placeholder="E-mail">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-6">
                                <!-- Name -->
                                <label for="">Fecha de inicio</label>
                                <input type="date" class="form-control mb-4" placeholder="Fecha inicio">
                            </div>
                            <div class="form-group col-6">
                                <!-- Email -->
                                <label for="">Fecha de final</label>
                                <input type="date" class="form-control mb-4" placeholder="Fecha fin">
                            </div>
                        </div>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4">
                            <option value="" selected disabled>Escoja su deporte</option>
                            <option value="1">Fútbol</option>
                            <option value="2">Voley</option>
                            <option value="3">Baloncesto</option>
                            <option value="4">Tenis</option>
                        </select>

                        <!-- Subject -->
                        <select class="browser-default custom-select mb-4">
                            <option value="" selected disabled>Escoja el tipo de torneo</option>
                            <option value="1">Liga</option>
                            <option value="2">Copa</option>
                            <option value="3">Mini Campeonato</option>
                            <option value="4">Amistoso</option>
                        </select>

                        <!-- Message -->
                        <div class="form-group">
                            <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="6"
                                placeholder="Descripción del torneo"></textarea>
                        </div>

                        <!-- Copy -->
                        <div class="custom-control custom-checkbox mb-4">
                            <input type="checkbox" class="custom-control-input" id="defaultContactFormCopy">
                            <label class="custom-control-label" for="defaultContactFormCopy">Enviarme una copia.</label>
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
                    <hr>
                    <ul class="list-group">
                        <li class="list-group-item text-center">
                            <br>

                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                    Bravaria
                                </label>
                                <br>
                                <small>Lima, Perú</small>
                            </p>
                        </li>

                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                    Catnip
                                </label>
                                <br>
                                <small>Lima, Perú</small>
                            </p>
                        </li>

                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                    Barbatos
                                </label>
                                <br>
                                <small>Lima, Perú</small>
                            </p>
                        </li>
                    </ul>


        </div>
    </div>

</div>
@endsection
