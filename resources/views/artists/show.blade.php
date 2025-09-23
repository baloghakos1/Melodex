<h1>{{ $artist->name }} albumai</h1>

<ul>
    @foreach($albums as $album)
        <li>{{ $album->name }}
            
        </li>
    @endforeach
</ul>

<!-- {{ dd($artist) }} -->