<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">  
    <title>{{ $artist->name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
</head>
<body>
<a href="{{ url('artist/' . str_replace(' ', '-', strtolower($artist->name))) }}"><button class="back-btn"><i class="fa-solid fa-left-long"></i></button></a>
<h1>{{ $artist->name }}</h1>

@if($artist->is_band === 'yes')
    <h3>Band Members:</h3>
    <ul>
        @foreach($members as $member)
        
        <div class="member-container">
          <img src="{{ $member->image }}" alt="{{ $member->name }}" class="member-photo">
          <div class="member-info">
            <h1 class="member-name"> {{ $member->name }} ({{$member->year}}) </h1>
            <h3 class="member-instrument">{{$member->instrument}}</h3>
          </div>
        </div>  
        @endforeach
    </ul>
@else
    <p>Solo Artist: {{ $artist->name }}</p>
@endif
</body>
</html>
