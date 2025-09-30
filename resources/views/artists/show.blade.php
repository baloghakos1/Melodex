

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $artist->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front_view.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/home_btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/album.css') }}">
</head>
<body>
@php
    $countryCodes = [
        'American' => 'us',
        'British' => 'gb',
        'Puerto Rican' => 'pr',
        'South Korean' => 'kr',
    ];

    $code = $countryCodes[$artist->nationality] ?? 'un';
@endphp
    <a href="{{ route('artists.index') }}"><button class="back-btn"><i class="fa-solid fa-left-long"></i></button></a>
    <div class="artist-container">
        <img src="{{ $artist->image }}" alt="{{ $artist->name }}" class="artist-photo">
        <div class="artist-info">
            <h1 class="artist-nationality"> {{ $artist->name }} <img src="https://flagcdn.com/w40/{{$code}}.png" alt="{{ $artist->nationality }} Flag" title="{{ $artist->nationality }}"></h1>
            <a href="{{  route('artists.description', ['artistname' => str_replace(' ', '-', strtolower($artist->name))]) }}"><button class="read-more-btn"><i class="fa-solid fa-square-plus"></i>Read More</button></a>
        </div>
    </div>
    <div class="album-container">
        @foreach($albums as $album)
        <a href="{{ route('artists.songs', ['artistname' => str_replace(' ', '-', strtolower($artist->name)),'albumid' => $album->id]) }}">
        <div class="album-info">
            <button class="album-cover-btn">
            <img class="album-cover" src="{{ $album->cover }}" alt="">
            <h1 class="album-name"> {{ $album->name }}</h1>
            <h3 class="album-release">{{ $album->year}}</h3>
            </button>
        </div>
        </a>
        @endforeach       
    </div>
    <a href="{{ url('/') }}" class="fixed-home-button">
    <img src="{{ asset('image/angled_view.png') }}" alt="Home" />
    </a>
</body>
</html>
