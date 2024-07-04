<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App Diego - @yield('title', 'Titulo Default')</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])

</head>
<header>
    @section('navbar')
    <nav
        class="navbar navbar-expand-sm navbar-dark bg-dark"
    >
        <a class="navbar-brand" href="{{ route('aeropuerto.index') }}">App Web</a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        ></button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Crear</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('pilotos.create') }}">Crear Piloto</a>
                        <a class="dropdown-item" href="{{ route('aerolineas.create') }}">Crear Aerolinea</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Ver</a
                    >
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{ route('pilotos.Pindex') }}">Ver Pilotos</a>
                        <a class="dropdown-item" href="{{ route('aerolineas.index') }}">Ver Aerolineas</a>
                    </div>
                </li>
            </ul>
            <form class="d-flex my-2 my-lg-0">
                <input
                    class="form-control me-sm-2"
                    type="text"
                    placeholder="Search"
                />
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    Search
                </button>
            </form>
        </div>
    </nav>
</header>
    @show

    <body>
        <div class="container">
            @yield('content')

        </div>
    </body>

