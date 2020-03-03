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


    @if(sizeof($teams) >= 5 && sizeof($matches) > 0)
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
                    @foreach ($matches as $m)
                    <tr>
                        <td class="text-center">{{$m->name1}}</td>
                        <td class="text-center font-weight-light">VS</td>
                        <td class="text-center">{{$m->name2}}</td>
                        <td class="text-center font-weight-light">{{$m->date}} {{$m->description || ''}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <a class="btn btn-lg btn-info"
            href="{{route('tournament.matches',$tournament['idtournament'])}}" role="button">Añadir
            marcadores</a>
            @else
            <div class="row">
                <div class="col-8">
                    <br><br>
                    <h5>Fixture<h5>
                            <hr>
                            <div class="card">
                                <div class="card-body font-weight-light">
                                    El torneo no ha llegado al límite de participantes o no hay
                                    equipos registrados.
                                </div>
                            </div>
                </div>
                <div class="col-4">
                    <br><br>
                    @if ($_SESSION)
                    <h5>Acciones<h5>
                            <hr>
                            @if (sizeof($teams) == 0)
                            <a class="btn btn-lg btn-info"
                                href="http://localhost:8000/team/create/t/{{$tournament['idtournament']}}"
                                role="button">Registrar
                                equipo</a><br><br>
                            @else
                            @if (sizeof($matches) == 0) <a class="btn btn-lg btn-info"
                                href="{{route('tournament.match',$tournament['idtournament'])}}" role="button">Añadir
                                encuentros</a>
                            @else
                            <a class="btn btn-lg btn-info"
                                href="{{route('tournament.matches',$tournament['idtournament'])}}" role="button">Añadir
                                marcadores</a>

                                @endif
                                @endif
                                @endif
                            </div>
                        </div>


            @endif


            <br><br>
            <h5>Equipos participantes<h5>
                    <hr>
                    <div class="row">
                        @if(sizeof($teams) > 0)
                        @foreach ($teams as $t)
                        <div class="col-3">
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <br>
                                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
                                            class="img-reponsive img-rounded" alt="{{$t->name}}">
                                    </div>
                                    <br>
                                    <hr>
                                    <h5 class="text-center"><a href="/team/info/{{$t->id}}">{{$t->name}}</a>
                                    </h5>
                                    <p class="font-weight-light text-center">DT: {{$t->coach}}</p><br>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @else
                        <hr>
                        <div class="card col-12">
                            <div class="card-body font-weight-light">
                                No existen equipos registrados en el torneo.
                            </div>
                        </div>
                        @endif
                    </div>
                    <br><br><br><br>



</div>


@endsection
