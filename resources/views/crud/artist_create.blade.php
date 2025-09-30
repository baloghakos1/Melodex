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
        <form method="POST" action="{{ route('artistcrud.store') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Artist Name</label>
                <input type="text" name="name" id="name" value="{{ old('name') }}" required>
                @error('name')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Artist Nationality</label>
                <input type="text" name="nationality" id="nationality" value="{{ old('nationality') }}" required>
                @error('nationality')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="year" class="block text-sm font-medium text-gray-700">Artist Description</label>
                <input type="text" name="description" id="description" value="{{ old('description') }}">
                @error('description')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-700">Artist Image URL</label>
                <input type="text" name="image" id="image" value="{{ old('image') }}">
                @error('image')
                    <p class="text-sm text-red-600 mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="is_band" class="block text-sm font-medium text-gray-700">Is Band</label>
                <select name="is_band" id="is_band" class="mt-1 block w-full rounded border-gray-300 shadow-sm">
                    <option value="yes">yes</option>
                    <option value="no">no</option>
                </select>
            </div>

            <div class="flex justify-end">
                
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">
                    Confirm
                </button>
            </div>
        </form>
        <a href="{{ route('crud.artists') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400 transition mr-2">
            <button>Back</button>
        </a>
    </div>
</body>
</html>