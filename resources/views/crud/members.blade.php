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
            {{ __('Select Data table: ') }}
            <select name="crud" id="crud" title="Data_table" onchange="location = this.value">
                <option value="{{ route('crud.index') }}" >-- Data tables --</option>
                <option value="{{ route('crud.artists') }}">
                        Artists
                </option>
                <option value="{{ route('crud.members') }}" selected>
                        Members
                </option>
                <option value="{{ route('crud.albums') }}">
                        Albums
                </option>
                <option value="{{ route('crud.songs') }}">
                        Songs
                </option>
            </select>
        </form>
    </div>
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-bold">Members Table</h2>
        <button><a href="{{ route('membercrud.create') }}" class="inline-block px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
            + New Member
        </a></button>
    </div>
    <br>
    <div>
        @if($members->isEmpty())
            <p>---</p>
        @else
        <table border="1px">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Instrument</th>
                    <th>Year</th>
                    <th>Artist_id</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->instrument }}</td>
                        <td>{{ $member->year }}</td>
                        <td>{{ $member->artist->name ?? 'N/A'}}</td>
                        <td>
                            <button><a href="{{ route('membercrud.edit', $member->id) }}" >+</a></button>
                            <form action="{{ route('membercrud.destroy', $member->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Are you Sure?');">
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