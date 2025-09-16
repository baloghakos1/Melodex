<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
</head>
<body>
@php
    $countryCodes = [
        'American' => 'us',
        'British' => 'gb',
        'Puerto Rican' => 'pr',
        'South Korean' => 'kr',
        // Add more as needed
    ];

    $code = $countryCodes[$artist->nationality] ?? 'un';
@endphp
    <a href="{{ route('artists.index') }}"><button class="back-btn"><i class="fa-solid fa-house"></i> All Artists</button></a>
    <h1 class="artist-nationality">{{ $artist->name }} <img src="https://flagcdn.com/w40/{{$code}}.png" alt="{{ $artist->nationality }} Flag" title="{{ $artist->nationality }}"></h1>
    <img src="{{ asset('image/' . $artist->image) }}" alt="{{ $artist->name }}" width="200">  
</body>
</html>
