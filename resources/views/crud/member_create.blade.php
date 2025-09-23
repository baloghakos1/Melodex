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
        <form method="POST" action="{{ route('membercrud.store') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Member Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Member Instrument</label>
                <input type="text" name="instrument" id="instrument" value="{{ old('instrument') }}" required>
                @error('instrument')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Member Year</label>
                <input type="number" name="year" id="year" value="{{ old('year') }}" required>
                @error('year')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="artist_id" class="block text-sm font-medium text-gray-700">Artist Id</label>
                <select name="artist_id" id="artist_id" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
                    @foreach($artists as $artist)
                        <option value="{{ $artist->id }}" {{ old('artist_id') == $artist->id ? 'selected' : '' }}>
                            {{ $artist->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end">
                <a href="{{ route('crud.members') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition mr-2">
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