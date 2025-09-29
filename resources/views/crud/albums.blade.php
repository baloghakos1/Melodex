<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>CRUD</title>
</head>
<body>
    <a href="{{ url('/') }}"><button class="back-btn"><i class="fa-solid fa-left-long"></i></button></a>
    @if(session('error'))
        <script>
            alert('{{ session("error") }}');
        </script>
    @endif
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
                <option value="{{ route('crud.albums') }}" selected>
                        Albums
                </option>
                <option value="{{ route('crud.songs') }}">
                        Songs
                </option>
            </select>
        </form>
    </div>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Albums Table</h2>
        <a href="{{ route('albumcrud.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition"><button>
            <i class="fa-solid fa-plus"></i>
        </button></a>
    </div>
    <br>
    <div>
        @if($albums->isEmpty())
            <p>---</p>
        @else
        <table border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Cover</th>
                    <th>Year</th>
                    <th>Genre</th>
                    <th>Artist_id</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($albums as $album)
                    <tr>
                        <td>{{ $album->id }}</td>
                        <td>{{ $album->name }}</td>
                        <td>{{ $album->cover }}</td>
                        <td>{{ $album->year }}</td>
                        <td>{{ $album->genre }}</td>
                        <td>{{ $album->artist->name ?? 'N/A'}}</td>
                        <td>
                            <a href="{{ route('albumcrud.edit', $album->id) }}" ><button><i class="fa-solid fa-pencil"></i></button></a>
                            <form action="{{ route('albumcrud.destroy', $album->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you Sure?');">
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
</body>
</html>