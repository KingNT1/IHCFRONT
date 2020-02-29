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
                        <h1>Torneo {{$tournament['name']}}</h1>
                        <h4 class="font-weight-light">{{$tournament['description']}}</h4>
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
                        @if(sizeof($teams) > 8)
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
                        @else
                        <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Fluid jumbotron</h1>
                                <p class="lead">This is a modified jumbotron that occupies the entire horizontal space
                                    of its parent.</p>
                            </div>
                        </div>
                        @endif
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
            @if(sizeof($teams) > 0)
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
            @else
            <div class="card">
                <div class="card-body font-weight-light">
                    No existen equipos registrados en el torneo.
                </div>
            </div>
            @endif


            <br><br>
            <h5>Equipos participantes<h5>
                    <hr><br>
                    <div class="row">
                        @if(sizeof($teams) > 0)
                        @foreach ($teams as $t)
                        <div class="col-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" alt="{{$t->name}}">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center"><a href="/team/info/{{$t->id}}">{{$t->name}}</a></h5>
                                    <p class="font-weight-light text-center">DT: {{$t->coach}}</p><br>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <div class="card">
                            <div class="card-body font-weight-light">
                                No existen equipos registrados en el torneo.
                            </div>
                        </div>
                        @endif
                    </div>
                    <br>



</div>


@endsection