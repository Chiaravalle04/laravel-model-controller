@extends('layouts.app')

@section('content')

    <h1>Laravel Movies</h1>

    <div class="main-container">

        <div class="container-card">
            
            @foreach ($movies as $movie)
        
            <div class="card animate__animated animate__bounceIn">
    
                <h2>{{ $movie->title }}</h2>
    
                <h3>{{ $movie->original_title }}</h3>
    
                <p><b>Nazionalità:</b> {{ $movie->nationality }}</p>
    
                <p><b>Data:</b> {{ $movie->date }}</p>
    
                <p><b>Voto:</b> {{ $movie->vote }}</p>
    
            </div>
    
            @endforeach

        </div>

    </div>

@endsection
