<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Job</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/colors.css') }}" rel="stylesheet">
    <link href="{{ asset('css/suisse.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery.fancybox.min.css') }}" rel="stylesheet">
</head>
<body>
<!-- START SITE -->
<div id="wrapper">
    <header class="header">
        <div class="container">

            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <h1>Stages <span>Droit</span></h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Accueil</a>
                        </li>

                        @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Votre compte</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ url('profil') }}">Profil</a>
                                <a class="dropdown-item" href="{{ url('') }}">Vos annonces</a>
                                <a class="dropdown-item" href="#"><i class="fas fa-lock"></i> &nbsp;Logout</a>
                            </div>
                        </li>
                        @endauth
                    </ul>
                    <ul class="navbar-nav nav-middle">
                        @auth
                            <li><a class="btn btn-default" title="" href="#">Créer une annonce</a></li>
                        @else
                            <li class="nav-item"><a class="btn btn-inverse" href="{{ url('login') }}">Login</a></li>
                            <li class="nav-item"><a class="btn btn-primary" href="{{ url('register') }}">Créer un compte</a></li>
                        @endauth
                        <li><a href="http://www.unine.ch"><img src="{{ asset('images/unine.svg') }}" width="95" height="65"></a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end container -->
    </header>
    <!-- end header -->

    @yield('content')


    <div id="sitefooter" class="stickyfooter">
        <div class="container">
            <div id="copyright" class="row">
                <div class="col d-flex align-items-center py-2">
                    <a href="http://unine.ch">® UniNE</a>
                </div>
            </div>
        </div>
    </div>


</div><!-- end wrapper -->
<!-- /END SITE -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>

<script src="{{ asset('js/jquery-migrate.min.js') }}" defer></script>
<script src="{{ asset('js/all.js') }}" defer></script>
<script src="{{ asset('js/jquery.fancybox.min.js') }}" defer></script>
<script src="{{ asset('js/custom.js') }}" defer></script>

</body>
</html>