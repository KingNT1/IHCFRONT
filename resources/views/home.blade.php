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
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-3-1920x671.jpg"
          alt="First slide">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1>Example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="second-slide d-block w-100"
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-3-1920x671.jpg"
          alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="third-slide d-block w-100"
          src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-3-1920x671.jpg"
          alt="Third slide">
        <div class="container">
          <div class="carousel-caption text-right">
            <h1>One more for good measure.</h1>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget
              metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
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
      <h5>Ultimos torneos creados<h5>
          <hr>
          <div class="row">
            <div class="col-6">
              <div class="card" style="width: 22rem;">
                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Torneo #1</h5>
                  <small><span class="badge badge-warning">Tournament</span> Febrero 20, 2020</small><br>
                  <hr>
                  <p class="font-weight-light">Light weight text.</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 22rem;">
                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Torneo #2</h5>
                  <small><span class="badge badge-warning">Tournament</span> Febrero 20, 2020</small><br>
                  <hr>
                  <p class="font-weight-light">Light weight text.</p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-6">
              <div class="card" style="width: 22rem;">
                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Torneo #1</h5>
                  <small><span class="badge badge-warning">Tournament</span> Febrero 20, 2020</small><br>
                  <hr>
                  <p class="font-weight-light">Light weight text.</p>
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="card" style="width: 22rem;">
                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                  class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Torneo #2</h5>
                  <small><span class="badge badge-warning">Tournament</span> Febrero 20, 2020</small><br>
                  <hr>
                  <p class="font-weight-light">Light weight text.</p>
                </div>
              </div>
            </div>
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

          <h5>Próximo partido<h5>
              <hr>
              <p>PENE</p>


    </div>
    <div class="col-4">
      <br>
      <h5>Resultados<h5>
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
                <small>Lima, Perú</small>
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
                <small>Lima, Perú</small>
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
                <small>Lima, Perú</small>
              </p>
            </li>

          </ul>
    </div>
  </div>

</div>
@endsection