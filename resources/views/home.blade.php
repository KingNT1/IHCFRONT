@extends('layout')

@section('content')
<div class="container">
  <div class="row">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100"
            src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-1-1920x671.jpg"
            alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-2-1920x671.jpg"
            alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100"
            src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/slider-1-slide-3-1920x671.jpg"
            alt="First slide">
          <div class="carousel-caption d-none d-md-block">
            <h5>...</h5>
            <p>...</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>

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
          <br>
    </div>
    <div class="col-4">
      <br>
      <h5>Resultados<h5>
          <hr>
    </div>
  </div>

</div>
@endsection