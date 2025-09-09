<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
</head>
<body>
    <h1>All Artists</h1>

    @if($artists->isEmpty())
        <p>No artists found.</p>
    @else
        <ul>
            @foreach($artists as $artist)
                <li>{{ $artist->name }}</li>
            @endforeach
        </ul>
    @endif

</body>
</html>
