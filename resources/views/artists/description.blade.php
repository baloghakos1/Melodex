<h1>{{ $artist->name }}</h1>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
@if($artist->is_band === 'yes')
    <h3>Band Members:</h3>
    <ul>
        @foreach($members as $member)
        
            <table>
                <tr>
                    <td> {{$member->name}}</td>
                    <td> {{$member->instrument}}</td>
                    <td> {{$member->year}}</td>
                    <td> <img src="{{ $member->image }}" alt="{{ $member->name }} image" style="max-width: 150px; height: auto;"></td>
                </tr>
            </table>
    <!-- {{ $member->name }} — {{ $member->instrument ?? 'Instrument not specified' }} - {{ $member->year }} -->
    <br>
    


        @endforeach
    </ul>
@else
    <p>Solo Artist: {{ $artist->name }}</p>
@endif