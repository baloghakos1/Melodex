<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Song;
use App\Models\Album;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($artistname, $album_id)
    {
        $artist = Artist::where('name', str_replace('-', ' ', ucfirst($artistname)))->first();
        $songs = Song::where('album_id', $album_id)->get();
        $album = Album::where('id',$album_id)->first();
        return view('artists.songs', compact('artist','songs','album'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
