@extends('layout')

@section('content')

<main role="main">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="first-slide d-block w-100"
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-1-1920x671.jpg"
          alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>El lugar perfecto</h1>
            <p>Para organizar tus torneos de fútbol desde la comodidad de tu hogar o oficina.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Empieza ya</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide d-block w-100"
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-2-1920x671.jpg"
          alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Los mejores</h1>
            <p>En servicios para la organización de torneos en línea.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Más información</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide d-block w-100"
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-3-1920x671.jpg"
          alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>Jugamos al fútbol</h1>
            <p>Con el conocimiento que tenemos, brindamos una interfaz amigable y funcionalidades
              perfectas para lo que estás buscando.
            </p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Inicia un torneo</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</main>

<div class="container">

  {{--Tournament cards--}}
  <div class="row">
    <div class="col-8">
      <br>
      <h5>Inscripciones abiertas<h5>
          <hr>
          <div class="row">
            @foreach ($tournaments as $t)
            <div class="col-6">
              <br>
              <div class="card" style="width: 22rem;">
                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><a href="/tournament/{{$t->idtournament}}/info">Torneo {{$t->name}}</a></h5>
                  <small><span class="badge badge-warning">Liga</span> Iniciado el
                    {{date('d-m-Y', strtotime($t->date_init))}}</small><br>
                  <hr>
                  <p class="font-weight-light">{{$t->description}}</p>
                </div>
              </div>
            </div>
            @endforeach

          </div>
          {{--End--}}
          <br>

          {{--Advisement jumbotron--}}
          <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Plataforma especializada en torneos</h1>
              <p class="lead my-3">Tus encuentros de fútbol realizados de una manera más organizada.</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continua leyendo...</a></p>
            </div>
          </div>
          {{--End--}}

          <h5>Partido especial<h5>
              <hr>
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-4 text-center border border-secondary">
                      <br>
                      <div class="pull-left">
                        <img
                          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-75x99.png"
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
                    <div class="col-4 text-center border border-secondary">
                      <br>
                      <div class="pull-right">
                        <img
                          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-91x91.png"
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
      <h5>Últimos resultados<h5>
          <hr>
          <ul class="list-group">
            <li class="list-group-item text-center">
              <br>

              <p class="font-weight-light">
                <span class="pull-left">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                Bravaria 3 - 0 Lotus
                <span class="pull-right">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                <br>
                <small>Lima, Perú</small><br>
                <small>Torneo #4</small>
              </p>
            </li>

            <li class="list-group-item text-center">
              <br>
              <p class="font-weight-light">
                <span class="pull-left">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                Sport Boys II 3 - 0 Catnip
                <span class="pull-right">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                <br>
                <small>Pucallpa, Perú</small><br>
                <small>Torneo #1</small>
              </p>
            </li>

            <li class="list-group-item text-center">
              <br>
              <p class="font-weight-light">
                <span class="pull-left">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                Squirrel 3 - 0 Barbatos
                <span class="pull-right">
                  <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                    class="img-reponsive img-rounded" />
                </span>
                <br>
                <small>Junín, Perú</small><br>
                <small>Torneo #2</small>
              </p>
            </li>
          </ul>

          <br>
          <h5>Torneo #1 - Posiciones<h5>
              <hr><br>
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
                    <td class="text-center"><img
                        src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-31x41.png"
                        class="img-reponsive img-rounded" />
                    </td>
                    <td class="text-center font-weight-light">153/30</td>
                    <td class="text-center font-weight-light">186</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center font-weight-light">1</th>
                    <td class="text-center"><img
                        src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                        class="img-reponsive img-rounded" />
                    </td>
                    <td class="text-center font-weight-light">120/30</td>
                    <td class="text-center font-weight-light">186</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center font-weight-light">1</th>
                    <td class="text-center"><img
                        src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                        class="img-reponsive img-rounded" />
                    </td>
                    <td class="text-center font-weight-light">100/30</td>
                    <td class="text-center font-weight-light">186</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center font-weight-light">1</th>
                    <td class="text-center"><img
                        src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                        class="img-reponsive img-rounded" />
                    </td>
                    <td class="text-center font-weight-light">98/30</td>
                    <td class="text-center font-weight-light">186</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center font-weight-light">1</th>
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