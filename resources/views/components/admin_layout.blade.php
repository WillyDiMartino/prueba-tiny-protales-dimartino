<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Fórmula 1</title>
    <link rel="stylesheet" href="<?= url('css/style.css'); ?>">
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <x-head.tinymce-config/>
</head>

<body>

    <div class="contenedor-inicial">
        <header>
            <h1 class="sr-only">Formula 1</h1>
            <nav class="navbar navbar-expand-lg">
                <div class=" container container-fluid">
                    <div class="container">
                        <a class="navbar-brand" href="<?= route('admin.index'); ?>">
                            <img src="<?= url('img/f1_logo.png') ?>" alt="formula uno logo">
                        </a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            @auth
                            <ul>
                                <li class="nav-item dropdown">
                                    <a class="nav-link user-btn" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{strtoupper(auth()->user()->name[0])}}
                                    </a>
                                    <form class="dropdown-menu" action="{{route('auth.logout')}}" method="post">
                                        @csrf
                                        <button type="submit" class="nav-link">Cerrar Sesión</button>
                                    </form>
                                </li>
                            </ul>
                            @else
                            <a class="nav-link" href="<?= route('auth.login'); ?>"><i class="bi bi-person-circle"></i><span class="sr-only">Iniciar Sesión</span></a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="admin_layout">
            <div class="container">
                @if (session() ->has ('feedback.message'))
                <div class="alert {{session('feedback.class')}} alert-dismissible fade show" role="alert"> {!! session () ->get('feedback.message')!!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
            </div>
            {{ $slot }}
        </main>

        <footer>

            <div class="d-flex justify-content-around align-items-center">
                <a href="<?= route('admin.index'); ?>"><img src="<?= url('img/f1_logo.png') ?>" alt="logo formula 1"></a>
                <ul>
                    <span>Alumnos:</span>
                    <li>Guillermo Di Martino</li>
                    <li>Tomás Paravic</li>
                </ul>
                <ul>
                    <span>Profesor:</span>
                    <li>Santiago Gallino</li>
                </ul>
                <ul>
                    <span>Materia:</span>
                    <li>Portales y comercio electrónico</li>
                    <span>Comisión:</span>
                    <li>DWN4AV</li>
                </ul>
                <a class="nav-link" href="<?= route('home'); ?>">Home</a>
            </div>

            <p>&copy; 2021 Formula 1 - Di Martino - Paravic</p>

        </footer>
    </div>
    <script src="<?= url('js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>