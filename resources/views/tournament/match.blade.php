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

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">

    <form action="{{route('tournament.update',$tournament['idtournament'])}}" method="post">
        <br><br>
        <h5>Fixture<h5>
                <hr>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col" class="text-center font-weight-light">Equipo A</th>
                            <th scope="col" class="text-center font-weight-light">VS</th>
                            <th scope="col" class="text-center font-weight-light">Equipo B</th>
                            <th scope="col" class="text-center font-weight-light">Día y hora</th>
                            <th scope="col" class="text-center font-weight-light">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-1[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">VS</td>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-2[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">
                                <input type="datetime-local" name="date[]" id="">
                            </td>
                            <td class="text-center font-weight-light"><input type="text" name="description[]" id="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-1[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">VS</td>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-2[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">
                                <input type="datetime-local" name="date[]" id="">
                            </td>
                            <td class="text-center font-weight-light"><input type="text" name="description[]" id="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-1[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">VS</td>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-2[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">
                                <input type="datetime-local" name="date[]" id="">
                            </td>
                            <td class="text-center font-weight-light"><input type="text" name="description[]" id="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-1[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">VS</td>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-2[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">
                                <input type="datetime-local" name="date[]" id="">
                            </td>
                            <td class="text-center font-weight-light"><input type="text" name="description[]" id="">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-1[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">VS</td>
                            <td class="text-center">
                                <select class="browser-default custom-select mb-4" name="team-2[]" required>
                                    <option value="" selected hidden disabled>Escoja su equipo</option>
                                    @foreach ($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="text-center font-weight-light">
                                <input type="datetime-local" name="date[]" id="">
                            </td>
                            <td class="text-center font-weight-light"><input type="text" name="description[]" id="">
                            </td>
                        </tr>
                    </tbody>
                </table>

                <button class="btn btn-primary btn btn-info" type="submit">Registrar</button>

    </form>
    <br><br>
    <h5>Equipos participantes<h5>
            <hr><br>
            <div class="row">
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
            </div>
            <br>



</div>


@endsection
