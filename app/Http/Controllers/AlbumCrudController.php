<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Artist;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Console\View\Components\Confirm;

class AlbumCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::with(['artist'])->get();
        return view('crud.albums', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();

        return view('crud.album_create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer|max:3000',
            'genre' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $album = new Album();
        $album->name = $request->name;
        $album->cover = $request->cover;
        $album->year = $request->year;
        $album->genre = $request->genre;
        $album->artist_id = $request->artist_id;
        $album->save();

        return redirect()->route('crud.albums')->with('success', "--{$album->name}-- Successfully created!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $album = Album::find($id);
        $artists = Artist::all();

        return view('crud.album_edit', compact('album', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'year' => 'required|integer|max:3000',
            'genre' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $album = Album::find($id);
        $album->name = $request->name;
        $album->cover = $request->cover;
        $album->year = $request->year;
        $album->genre = $request->genre;
        $album->artist_id = $request->artist_id;
        $album->save();

        return redirect()->route('crud.albums')->with('success', "Successful edit!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $album = Album::find($id);
        if ($album->song->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete album because it has related songs.');
        }
        $album->delete();

        return redirect()->route('crud.albums')->with('success', "--{$album->name}-- succesfully deleted");
    }
}
