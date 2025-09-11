<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
</head>
<body>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="GET" action="{{ request()->url() }}">
                        {{ __('Válassz adattáblát: ') }}
                        <select name="crud" id="crud" title="Adattábla" onchange="location = this.value">
                        <option value="{{ route('artists.index') }}" selected>-- Adattáblák --</option>
                            <option value="{{ route('artists.index') }}" >
                                    
                            </option>
                            <option value="{{ route('artists.index') }}">
                                    Tantárgyak
                            </option>
                            <option value="{{ route('artists.index') }}">
                                    Osztályok
                            </option>
                            <option value="{{ route('artists.index') }}">
                                    Osztályok_Tantárgyai
                            </option>
                            <option value="{{ route('artists.index') }}">
                                    Osztályzatok
                            </option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
