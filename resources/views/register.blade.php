@extends('layout')

@section('content')
<br>
<div class="container">
    <br>
    <p class="text-center">¡Registrar una cuenta en la plataforma es gratis!</a></p>
    <hr>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Registro</h4>
            <br>
            <form method="post" action="{{route('user.register')}}">
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="userName" class="form-control" placeholder="Nombres" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="userEmail" class="form-control" placeholder="Email" type="email">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <input name="userPhone" class="form-control" placeholder="Teléfono" type="text">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="userPassword" class="form-control" placeholder="Contraseña" type="password">
                </div>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" placeholder="Repite la contraseña" type="password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block" id="button-register">Registrarse</button>
                </div>
                <p class="text-center">¿Ya tienes una cuenta? <a href="/home">Inicia sesión</a> </p>
            </form>
        </article>
    </div>
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
</div>
<br><br>

@endsection