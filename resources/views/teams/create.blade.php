@extends('layout')

@section('scripts')
<script src="{{URL::asset('js/formTeam.js')}}"></script>
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
                        <h1>Registra tu equipo</h1>
                        <h4 class="font-weight-light">--</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<br>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h5>Información general<h5>
                    <hr>
                    <div class="card">
                        <div class="card-body ">

                            <div class="form-group font-weight-normal">
                                <label for="inputAddress">Nombre del equipo</label>
                                <input type="text" class="form-control" id="team-name"
                                    placeholder="Coloca un nombre genial para tu equipo...">
                            </div>
                            <div class="form-row font-weight-normal">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Entrenador</label>
                                    <input type="text" class="form-control" id="coach-name" placeholder="Nombre">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Siglas</label>
                                    <input type="text" class="form-control" id="team-initials"
                                        placeholder="EFC o similares...">
                                </div>
                            </div>

                            <div class="form-group font-weight-normal">
                                <label for="inputAddress2">Ubicación del equipo</label>
                                <input type="text" class="form-control" id="team-ubication" placeholder="Lima, Perú">
                            </div>
                            <br>
                            <h5>Jugadores<h5>
                                    <hr>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputAddress2">Jugador #1</label>
                                            <input type="text" class="form-control" id="player-name-1"
                                                placeholder="Enrique Alarcón">
                                        </div>
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputCity">Posición</label>
                                            <select class="custom-select" id="player-pos-1">
                                                <option value="0">Selecciona una posición...</option>
                                                <option value="1">Delantero</option>
                                                <option value="2">Defensa</option>
                                                <option value="3">Mediocampista</option>
                                                <option value="4">Arquero</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputAddress2">Jugador #2</label>
                                            <input type="text" class="form-control" id="player-name-2" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputCity">Posición</label>
                                            <select class="custom-select" id="player-pos-2">
                                                <option value="0">Selecciona una posición...</option>
                                                <option value="1">Delantero</option>
                                                <option value="2">Defensa</option>
                                                <option value="3">Mediocampista</option>
                                                <option value="4">Arquero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputAddress2">Jugador #3</label>
                                            <input type="text" class="form-control" id="player-name-3" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputCity">Posición</label>
                                            <select class="custom-select" id="player-pos-3">
                                                <option value="0">Selecciona una posición...</option>
                                                <option value="1">Delantero</option>
                                                <option value="2">Defensa</option>
                                                <option value="3">Mediocampista</option>
                                                <option value="4">Arquero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputAddress2">Jugador #4</label>
                                            <input type="text" class="form-control" id="player-name-4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputCity">Posición</label>
                                            <select class="custom-select" id="player-pos-4">
                                                <option value="0">Selecciona una posición...</option>
                                                <option value="1">Delantero</option>
                                                <option value="2">Defensa</option>
                                                <option value="3">Mediocampista</option>
                                                <option value="4">Arquero</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputAddress2">Jugador #5</label>
                                            <input type="text" class="form-control" id="player-name-5" placeholder="">
                                        </div>
                                        <div class="form-group col-md-6 font-weight-normal">
                                            <label for="inputCity">Posición</label>
                                            <select class="custom-select" id="player-pos-5">
                                                <option value="0">Selecciona una posición...</option>
                                                <option value="1">Delantero</option>
                                                <option value="2">Defensa</option>
                                                <option value="3">Mediocampista</option>
                                                <option value="4">Arquero</option>
                                            </select>
                                        </div>
                                    </div>

                                    <input type="button" class="btn btn-info float-right" id="btn-create-team"
                                        value="Registrar equipo">



                        </div>
                    </div>
        </div>
        <div class="col-4">
            <h5>Escudo<h5>
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
                                </label>
                            </p>
                        </li>
                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-athletic-33x30.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                </label>
                            </p>
                        </li>
                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-31x41.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                </label>
                            </p>
                        </li>
                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                </label>
                            </p>
                        </li>
                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-celta-vigo-35x39.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                </label>
                            </p>
                        </li>
                        <li class="list-group-item text-center">
                            <br>
                            <p class="font-weight-light">
                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                                <label class="custom-control-label" for="customControlAutosizing">
                                    <span class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                                            class="img-reponsive img-rounded" />
                                    </span>
                                </label>
                            </p>
                        </li>
                    </ul>

        </div>
    </div>
    <br>

</div>

@endsection