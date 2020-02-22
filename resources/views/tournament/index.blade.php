@extends('layout')

@section('content')

<div class="container">
    {{--Tournament cards--}}
    <div class="row">
        <div class="col-8">
            <br>
            <h5>Mis torneos<h5>
                    <hr>
                    <div class="row">
                        <div class="col-6">
                            <div class="card" style="width: 22rem;">
                                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Torneo #1</a></h5>
                                    <small><span class="badge badge-warning">Liga</span> Febrero 23,
                                        2020</small><br>
                                    <hr>
                                    <p class="font-weight-light">Partidos del barrio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card" style="width: 22rem;">
                                <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/news-2-1-368x287.jpg"
                                    class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">Torneo #2</a></h5>
                                    <small><span class="badge badge-warning">Copa</span> Febrero 20,
                                        2020</small><br>
                                    <hr>
                                    <p class="font-weight-light">Chamba amigos.</p>
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
                                    <h5 class="card-title"><a href="">Torneo #3</a></h5>
                                    <small><span class="badge badge-warning">Liga</span> Febrero 25,
                                        2020</small><br>
                                    <hr>
                                    <p class="font-weight-light">Torneo interfacultades.</p>
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
                            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continua leyendo...</a>
                            </p>
                        </div>
                    </div>
                    {{--End--}}


        </div>
        <div class="col-4">
            <br>
            <p><a class="btn btn-lg btn-primary" href="{{url('tournament/create')}}" role="button">Añadir torneo</a></p>
            <br>
            <h5>Torneo #1 - Posiciones</h5>
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
                        <th scope="row" class="text-center font-weight-light">2</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">120/30</td>
                        <td class="text-center font-weight-light">153</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">3</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">100/30</td>
                        <td class="text-center font-weight-light">120</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">4</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">98/30</td>
                        <td class="text-center font-weight-light">116</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">5</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-bavaria-fc-26x34.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">87/30</td>
                        <td class="text-center font-weight-light">105</td>
                    </tr>
                </tbody>
            </table>

            <br>
            <h5>Torneo #2 - Posiciones</h5>
            <hr><br>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-center font-weight-light">#</th>
                        <th scope="col" class="text-center font-weight-light">Equipo</th>
                        <th scope="col" class="text-center font-weight-light">GF</th>
                        <th scope="col" class="text-center font-weight-light">GC</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">1</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-31x41.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">25</td>
                        <td class="text-center font-weight-light">4</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">2</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-dream-team-34x34.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">20</td>
                        <td class="text-center font-weight-light">7</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">3</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-real-madrid-28x37.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">16</td>
                        <td class="text-center font-weight-light">12</td>
                    </tr>
                    <tr>
                        <th scope="row" class="text-center font-weight-light">4</th>
                        <td class="text-center"><img
                                src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-barcelona-30x35.png"
                                class="img-reponsive img-rounded" />
                        </td>
                        <td class="text-center font-weight-light">12</td>
                        <td class="text-center font-weight-light">20</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
