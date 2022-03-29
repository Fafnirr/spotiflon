<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">
        <title>Document</title>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-light bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('image/spotify.png') }}" alt="" width="50" height="40">
                        <span class="brand">Spotify</span>
                    </a>
                </div>
                <ul class="navbar justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Premium</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Assistance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Télécharger</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Connexion</a>
                    </li>
                </ul>
            </nav>
        </header>
    </body>
</html>