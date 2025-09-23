<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="p-6 text-gray-900">
        <form method="POST" action="{{ route('songcrud.update', $song->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Song Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $song->name) }}" required>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Song Lyrics</label>
                <input type="text" name="lyrics" id="lyrics" value="{{ old('lyrics', $song->lyrics) }}">
                @error('lyrics')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Songwriter</label>
                <input type="text" name="songwriter" id="songwriter" value="{{ old('songwriter', $song->songwriter) }}" required>
                @error('songwriter')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="album_id" class="block text-sm font-medium text-gray-700">Album Id</label>
                <select name="album_id" id="album_id" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
                    @foreach($albums as $album)
                        <option value="{{ $album->id }}" {{ $song->album_id == $album->id ? 'selected' : '' }}>
                            {{ $album->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('crud.songs') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition mr-2">
                    Back
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Confirm
                </button>
            </div>
        </form>
    </div>
    
</body>
</html>