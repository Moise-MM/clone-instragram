<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Instragram</title>
    <link rel="stylesheet" id="theme_link"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.3.1/materia/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/navbar-fixed-left.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/docs.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/docs.js') }}"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <a class="navbar-brand" href><img src="{{ asset('images/instragram.png') }}" alt="" width="150" height="50"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav lead">
                @if (Auth::check())
                    
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <a class="nav-link" data-class="fixed-left">
                            <i class="fa fa-home mr-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <a class="nav-link" data-class="fixed-left">
                            <i class="fas fa-search mr-2"></i>
                            Search
                        </a>
                    </li>
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <a class="nav-link" data-class="fixed-left">
                            <i class="fab fa-facebook-messenger mr-2"></i>
                            Messages
                        </a>
                    </li>
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <a href="{{ route('post.create') }}" class="nav-link" data-class="fixed-left">
                            <i class="fas fa-border-all mr-2"></i>
                            Create
                        </a>
                    </li>
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <a href="{{ route('profile.index', Auth::user()) }}" class="nav-link" data-class="fixed-left">
                            <i class="far fa-user-circle mr-2"></i>
                            Profile
                        </a>
                    </li>
                    <li class="nav-item pt-3" style="font-size: 1.3rem">
                        <form action="{{ route('user.logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit"  style="border: none; background-color:white">Log out</button>
                        </form>
                    </li>
                @else
                <li class="nav-item pt-3" style="font-size: 1.3rem">
                    <a href="{{ route('login') }}" class="nav-link" data-class="fixed-left">
                        Login
                    </a>
                </li>
                <li class="nav-item pt-3" style="font-size: 1.3rem">
                    <a href="{{ route('user.register') }}" class="nav-link" data-class="fixed-left">
                        Sign up
                    </a>
                </li>
            </ul>
                @endif
        </div>
    </nav>


    <div class="container">
        {{ $slot }}

    </div>

</body>

</html>