

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
    <link rel="stylesheet" href="{{ asset('css/artists.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('front_view.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/home_btn.css') }}">
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ request()->url() }}">
                        @foreach($artists->unique('name') as $artist)
                        <a href="{{ url('artist/' . str_replace(' ', '-', strtolower($artist->name))) }}">
                        <button type="button" class="artist-btn"><img class="artist-img" src="{{ asset('image/' . $artist->image) }}" alt=""><span class="artist-name">{{ $artist->name }}</span></button></a>
                        @endforeach
                    </form>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('/') }}" class="fixed-home-button">
    <img src="{{ asset('image/angled_view.png') }}" alt="Home" />
    </a>
</body>
</html>