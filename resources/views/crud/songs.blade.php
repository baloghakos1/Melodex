<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home_btn.css') }}">
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
            {{ __('Select Data table: ') }}
            <select name="crud" id="crud" title="Data_table" onchange="location = this.value">
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
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Songs Table</h2>
        <a href="{{ route('songcrud.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"><button>
            <i class="fa-solid fa-plus"></i>
        </button></a>
    </div>
    <br>
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
                            <a href="{{ route('songcrud.edit', $song->id) }}" ><button><i class="fa-solid fa-pencil"></i></button></a>
                            <form action="{{ route('songcrud.destroy', $song->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you Sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline"><i class="fa-solid fa-minus"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <a href="{{ url('/') }}" class="fixed-home-button">
    <img src="{{ asset('image/angled_view.png') }}" alt="Home" />
    </a>
</body>
</html>