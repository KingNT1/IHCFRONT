@extends('layout')

@section('content')

<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide d-block w-100"
                    src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-2-1920x671.jpg"
                    alt="First slide" style="height:300px;">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Torneos</h1>
                        <h4 class="font-weight-light">Lista de todos los torneos en curso</h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>

<div class="container">
    <br><br>
    <h5>En curso<h5>
            <hr>
            <div class="row">
                @foreach ($tournaments as $t)
                <div class="col-4">
                    <br>
                    <div class="card" style="width: 22rem;">
                        <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/tournament/{{$t->idtournament}}/info">Torneo
                                    {{$t->name}}</a></h5>
                            <small><span class="badge badge-warning">Liga</span> Iniciado el
                                {{date('d-m-Y', strtotime($t->date_init))}}</small><br>
                            <hr>
                            <p class="font-weight-light">{{$t->description}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <br>

            <br>
            {{--
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Anterior</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Siguiente</a>
                    </li>
                </ul>
            </nav>--}}
</div>

@endsection