<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--Assets--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://dl.dropbox.com/s/vo5ud61ci1ohon1/navbar-top-fixed.css">
    @yield('assets')

    {{--Scripts--}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    @yield('scripts')



    <title>DreamStars</title>
</head>

<body>

    <style>
        .jumbotron {
            background-image: url('https://livedemo00.template-help.com/wt_63853_v4/soccer/images/post-gloria-1-769x429.jpg');
            background-size: cover;
            height: 100%;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/home">
            <img src="https://livedemo00.template-help.com/wt_63853_v4/soccer/images/team-sportland-41x55.png" alt="">
            &nbsp;DreamStars
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Inicio<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tournament/create">Organizar torneo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tournament">Torneos en curso</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tournament/personal">Mis torneos</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        General
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Locales</a>
                        <a class="dropdown-item" href="#">Nuestros árbitros</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Próximos partidos</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                @if(isset($_SESSION['user_session']))
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hola, {{$_SESSION['user_session']['name']}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/close')}}">Cerrar sesión</a>
                    </div>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                    </a>
                    <div class="dropdown-menu dropdown-menu-right"
                        style="padding: 15px; padding-bottom: 10px; width:300px;">
                        <form class="form-horizontal" method="post" action="{{route('user.signin')}}"
                            accept-charset="UTF-8">
                            <input class="form-control login" type="email" name="userEmail" placeholder="Email"><br>
                            <input class="form-control login" type="password" name="userPassword"
                                placeholder="Contraseña"><br>
                            <input class="btn btn-primary" type="submit" name="submit" value="Login">
                        </form>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </nav>

    @yield('content')

    <footer class="navbar navbar-default navbar-dark bg-dark navbar-fixed-bottom">
        <div class="container">
            <p class="navbar-text pull-left">© 2020 - LOST.
            </p>
            <a href="..." class="navbar-btn btn-danger btn pull-right">
                Siguenos en Facebook</a>
        </div>
    </footer>

</body>

</html>