<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ Vite::asset('resources/img/...') }}">

        <title>Laravel Movies</title>

        <!--Animate.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!--Vite-->
        @vite('resources/js/app.js')
        
    </head>
    <body>

        <main>

            @yield('content')

        </main>

    </body>
</html>