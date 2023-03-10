<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--Favicon-->
        <link rel="shortcut icon" type="image/png" href="{{ Vite::asset('resources/img/...') }}">

        <title>Laravel Movies</title>

        <!-- Fonts -->

        
        <!--Vite-->
        @vite('resources/js/app.js')


        <!-- Styles -->
        
    </head>
    <body>

        @foreach ($movies as $movie)
       
        <div class="card">

            <p>{{ $movie->title }}</p>

        </div>

        @endforeach

    </body>
</html>
