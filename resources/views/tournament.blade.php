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
                        <h1>Torneo #1</h1>
                        <h4 class="font-weight-light">Lima, Perú</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<div class="container">

    <div class="row">
        <div class="col-8">
            <br><br>
            <h5>Grupos<h5>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list-group">
                                <li class="list-group-item text-center">
                                    <p class="font-weight-light">
                                        <br>
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Bravaria
                                    </p>
                                </li>

                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Barbatos
                                    </p>
                                </li>

                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Celtic
                                    </p>
                                </li>
                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-celta-vigo-35x39.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Sportland
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-4"></div>
                        <div class="col-4">
                            <ul class="list-group">
                                <li class="list-group-item text-center">
                                    <p class="font-weight-light">
                                        <br>
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Dream Team
                                    </p>
                                </li>

                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Pulse 200
                                    </p>
                                </li>

                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        Over-Ear
                                    </p>
                                </li>
                                <li class="list-group-item text-center">
                                    <br>
                                    <p class="font-weight-light">
                                        <span class="pull-left">
                                            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-31x41.png"
                                                class="img-reponsive img-rounded" />
                                        </span>
                                        K.O.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
        </div>
        <div class="col-4">
            <br><br>
            <h5>Árbitros<h5>
                    <hr>
                    <ul class="list-group">
                        <li class="list-group-item font-weight-light">Cras justo odio</li>
                        <li class="list-group-item font-weight-light">Dapibus ac facilisis in</li>
                        <li class="list-group-item font-weight-light">Morbi leo risus</li>
                        <li class="list-group-item font-weight-light">Porta ac consectetur ac</li>
                    </ul>
        </div>
    </div>

    <br><br>
    <h5>Fixture<h5>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" class="text-center font-weight-light">Equipo A</th>
                        <th scope="col" class="text-center font-weight-light">VS</th>
                        <th scope="col" class="text-center font-weight-light">Equipo B</th>
                        <th scope="col" class="text-center font-weight-light">Detalles</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">Dream Team</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">Lotus</td>
                        <td class="text-center font-weight-light">Marzo 03, 08:30 PM <br> Balconcillo, La
                            Victoria</td>
                    </tr>
                    <tr>
                        <td class="text-center">Bavaria</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">Sportland</td>
                        <td class="text-center font-weight-light">Marzo 03, 08:30 PM <br> Balconcillo, La
                            Victoria</td>
                    </tr>
                    <tr>
                        <td class="text-center">Celtic</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">K.O.</td>
                        <td class="text-center font-weight-light">Marzo 03, 08:30 PM <br> Balconcillo, La
                            Victoria</td>
                    </tr>
                    <tr>
                        <td class="text-center">Barbatos</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">Pulse 200</td>
                        <td class="text-center font-weight-light">Marzo 03, 08:30 PM <br> Balconcillo, La
                            Victoria</td>
                    </tr>
                    <tr>
                        <td class="text-center">Over-Ear</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">Celtic</td>
                        <td class="text-center font-weight-light">Marzo 03, 08:30 PM <br> Balconcillo, La
                            Victoria</td>
                    </tr>
                </tbody>
            </table>

            <br><br>
            <h5>Equipos participantes<h5>
                    <hr><br>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center"><a href="/tournament/1/teams/1">Dream Team</a></h5>
                                    <p class="font-weight-light text-center">DT: Ernesto Cueva</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-77x99.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Bravaria</h5>
                                    <p class="font-weight-light text-center">DT: Afredo Ornachea</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Sportland</h5>
                                    <p class="font-weight-light text-center">DT: FallOut</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-78x98.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Celtic</h5>
                                    <p class="font-weight-light text-center">DT: Elías Gorbachov</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">K.O.</h5>
                                    <p class="font-weight-light text-center">DT: Elric Johnson</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-77x99.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Barbatos</h5>
                                    <p class="font-weight-light text-center">DT: Lupus Enri</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Pulse 200</h5>
                                    <p class="font-weight-light text-center">DT: Avec Profondes</p><br>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-78x98.png"
                                            class="img-reponsive img-rounded" alt="...">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center">Over-Ear</h5>
                                    <p class="font-weight-light text-center">DT: Superior Bass</p><br>
                                </div>
                            </div>
                        </div>
                    </div>


</div>


@endsection