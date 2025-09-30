<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $artist->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front_view.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/home_btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/song.css') }}">
</head>
<body>
<a href="{{ url('artist/' . str_replace(' ', '-', strtolower($artist->name))) }}"><button class="back-btn"><i class="fa-solid fa-left-long"></i></button></a>
@foreach($songs as $song)  
        <div class="song-info">
            <img class="song-cover" src="{{ $album->cover }}" alt="">
            <div class="song-details">
                <h1 class="song-name"> {{ $song->name }}</h1>
                <h3 class="song-artist">{{ $artist->name}}</h3>
            </div>
        </div>
@endforeach
<a href="{{ url('/') }}" class="fixed-home-button">
    <img src="{{ asset('image/angled_view.png') }}" alt="Home" />
    </a>
    </body>
</html>