<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Browser Travel</title>
    @vite(['resources/js/app.js'])

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="antialiased">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="/">Mapa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="weather/history">Historial</a>
        </li>
    </ul>

    <div class="container">
        @section('content')

        @show
    </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    @vite(['resources/js/cities.js'])

</body>

</html>
