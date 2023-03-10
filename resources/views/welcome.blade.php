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

        <div class="main-container">

            <div class="container-card">
                
                @foreach ($movies as $movie)
               
                <div class="card">
        
                    <h2>{{ $movie->title }}</h2>
        
                    <h3>{{ $movie->original_title }}</h3>
        
                    <p><b>Nazionalità:</b> {{ $movie->nationality }}</p>
        
                    <p><b>Data:</b> {{ $movie->date }}</p>
        
                    <p><b>Voto:</b> {{ $movie->vote }}</p>
        
                </div>
        
                @endforeach

            </div>

        </div>

    </body>
</html>
