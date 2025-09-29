<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <div class="p-6 text-gray-900">
        <form method="GET" action="{{ request()->url() }}">
            {{ __('Select Data table: ') }}
            <select name="crud" id="crud" title="Data_table" onchange="location = this.value">
                <option value="{{ route('crud.index') }}"  selected>-- Data tables --</option>
                <option value="{{ route('crud.artists') }}">
                        Artists
                </option>
                <option value="{{ route('crud.members') }}">
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
</body>
</html>