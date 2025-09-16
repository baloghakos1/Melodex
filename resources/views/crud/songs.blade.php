<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    @if(session('success'))
        <script>
            alert('{{ session("success") }}');
        </script>
    @endif
    <div class="p-6 text-gray-900">
        <form method="GET" action="{{ request()->url() }}">
            {{ __('Válassz adattáblát: ') }}
            <select name="crud" id="crud" title="Adattábla" onchange="location = this.value">
                <option value="{{ route('crud.index') }}">-- Data tables --</option>
                <option value="{{ route('crud.artists') }}">
                        Artists
                </option>
                <option value="{{ route('crud.members') }}">
                        Members
                </option>
                <option value="{{ route('crud.albums') }}">
                        Albums
                </option>
                <option value="{{ route('crud.songs') }}" selected>
                        Songs
                </option>
            </select>
        </form>
    </div>
    <div>
        @if($songs->isEmpty())
            <p>---</p>
        @else
        <table border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Lyrics</th>
                    <th>Songwriter</th>
                    <th>Album_id</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($songs as $song)
                    <tr>
                        <td>{{ $song->id }}</td>
                        <td>{{ $song->name }}</td>
                        <td>{{ $song->lyrics }}</td>
                        <td>{{ $song->songwriter }}</td>
                        <td>{{ $song->album->name ?? 'N/A'}}</td>
                        <td>
                            <button>+</button>
                            <form action="{{ route('songscrud.destroy', $song->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you Sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">-</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
</body>
</html>