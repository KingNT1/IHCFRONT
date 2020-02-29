@extends('layout')

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
                        <h1>{{$team['name']}}</h1>
                        <h4 class="font-weight-light">Participante del Torneo "{{$actualTournament['name']}}"</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<div class="container">
    <div class="row">
        <div class="col-8">
            <br>
            <h5>Horario de encuentros<h5>
                    <hr>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-weight-light text-center">EL ROSARIO - 08:30PM</h6>
                            <h2 class="text-center">TORNEO #1: ENCUENTRO 1</h2>
                            <br>
                            <div class="row">
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Sport ONE</h5>
                                    <p class="font-weight-light text-center">La Molina</p><br>
                                </div>
                                <div class="col-4">
                                    <br><br>
                                    <h4 class="text-center">MAR 03</h4>
                                    <h6 class="font-weight-light text-center">Febrero 2020</h6>
                                    <hr>
                                    <h2 class="text-center">VS</h2>
                                </div>
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-right">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Dream Team</h5>
                                    <p class="font-weight-light text-center">Jesus María</p><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-weight-light text-center">EL ROSARIO - 08:30PM</h6>
                            <h2 class="text-center">TORNEO #1: ENCUENTRO 2</h2>
                            <br>
                            <div class="row">
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Sport ONE</h5>
                                    <p class="font-weight-light text-center">La Molina</p><br>
                                </div>
                                <div class="col-4">
                                    <br><br>
                                    <h4 class="text-center">MAR 03</h4>
                                    <h6 class="font-weight-light text-center">Febrero 2020</h6>
                                    <hr>
                                    <h2 class="text-center">VS</h2>
                                </div>
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-right">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Dream Team</h5>
                                    <p class="font-weight-light text-center">Jesus María</p><br>
                                </div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-weight-light text-center">EL ROSARIO - 08:30PM</h6>
                            <h2 class="text-center">TORNEO #1: ENCUENTRO 3</h2>
                            <br>
                            <div class="row">
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-left">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Sport ONE</h5>
                                    <p class="font-weight-light text-center">La Molina</p><br>
                                </div>
                                <div class="col-4">
                                    <br><br>
                                    <h4 class="text-center">MAR 03</h4>
                                    <h6 class="font-weight-light text-center">Febrero 2020</h6>
                                    <hr>
                                    <h2 class="text-center">VS</h2>
                                </div>
                                <div class="col-4 text-center">
                                    <br>
                                    <div class="pull-right">
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" />
                                    </div>
                                    <br>
                                    <h5 class="text-center">Dream Team</h5>
                                    <p class="font-weight-light text-center">Jesus María</p><br>
                                </div>

                            </div>
                        </div>
                    </div>
        </div>
        <div class="col-4">
            <br>
            <h5>Jugadores<h5>
                    <hr>
                    <br>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="text-center">#</th>
                                <th scope="col" class="text-center">Jugador</th>
                                <th scope="col" class="text-center">Posición</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($players as $p)
                            <tr>
                                <th scope="row" class="text-center">{{$p->playerNumber}}</th>
                                <td class="text-center font-weight-light">{{$p->playerName}}</td>
                                <td class="text-center font-weight-light">{{$p->playerPosition}}</td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    <br>
                    <h5>Tabla de posiciones<h5>
                            <hr>
                            <br>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center font-weight-light">#</th>
                                        <th scope="col" class="text-center font-weight-light">Equipo</th>
                                        <th scope="col" class="text-center font-weight-light">G/P</th>
                                        <th scope="col" class="text-center font-weight-light">PTS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row" class="text-center font-weight-light">1</th>
                                        <td class="text-center">Dream Team</td>
                                        <td class="text-center font-weight-light">153/30</td>
                                        <td class="text-center font-weight-light">186</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center font-weight-light">2</th>
                                        <td class="text-center"><img
                                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                                class="img-reponsive img-rounded" />
                                        </td>
                                        <td class="text-center font-weight-light">120/30</td>
                                        <td class="text-center font-weight-light">186</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center font-weight-light">3</th>
                                        <td class="text-center"><img
                                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                                                class="img-reponsive img-rounded" />
                                        </td>
                                        <td class="text-center font-weight-light">100/30</td>
                                        <td class="text-center font-weight-light">186</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center font-weight-light">4</th>
                                        <td class="text-center"><img
                                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                                                class="img-reponsive img-rounded" />
                                        </td>
                                        <td class="text-center font-weight-light">98/30</td>
                                        <td class="text-center font-weight-light">186</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="text-center font-weight-light">5</th>
                                        <td class="text-center"><img
                                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                                                class="img-reponsive img-rounded" />
                                        </td>
                                        <td class="text-center font-weight-light">87/30</td>
                                        <td class="text-center font-weight-light">186</td>
                                    </tr>
                                </tbody>
                            </table>
        </div>
    </div>
</div>



@endsection