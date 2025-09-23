<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\Album;

class SongCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $songs = Song::with(['album'])->get();
        return view('crud.songs', compact('songs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $albums = Album::all();

        return view('crud.song_create', compact('albums'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'songwriter' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
        ]);

        $song = new Song();
        $song->name = $request->name;
        $song->lyrics = $request->lyrics;
        $song->songwriter = $request->songwriter;
        $song->album_id = $request->album_id;
        $song->save();

        return redirect()->route('crud.songs')->with('success', "--{$song->name}-- Successfulfy created!");
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
        $song = Song::find($id);
        $albums = Album::all();

        return view('crud.song_edit', compact('song', 'albums'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'songwriter' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
        ]);

        $song = Song::find($id);
        $song->name = $request->name;
        $song->lyrics = $request->lyrics;
        $song->songwriter = $request->songwriter;
        $song->album_id = $request->album_id;
        $song->save();

        return redirect()->route('crud.songs')->with('success', "Successful edit!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $song = Song::find($id);
        $song->delete();

        return redirect()->route('crud.songs')->with('success', "--{$song->name}-- succesfully deleted");
    }
}
