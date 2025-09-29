<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artist;

class ArtistCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artists = Artist::all();
        return view('crud.artists', compact('artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crud.artist_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
        ]);

        $artist = new Artist();
        $artist->name = $request->name;
        $artist->nationality = $request->nationality;
        $artist->image = $request->image;
        $artist->description = $request->description;
        $artist->is_band = $request->is_band;
        $artist->save();

        return redirect()->route('crud.artists')->with('success', "--{$artist->name}-- successfully created!");
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
        $artist = Artist::find($id);
        return view('crud.artist_edit', compact('artist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
        ]);

        $artist = Artist::find($id);
        $artist->name = $request->name;
        $artist->nationality = $request->nationality;
        $artist->image = $request->image;
        $artist->description = $request->description;
        $artist->is_band = $request->is_band;
        $artist->save();

        return redirect()->route('crud.artists')->with('success', "Successful edit!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $artist = Artist::find($id);
        if ($artist->album->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete artist because it has related albums.');
        }
        if ($artist->member->count() > 0) {
            return redirect()->back()->with('error', 'Cannot delete album because it has related members.');
        }
        $artist->delete();

        return redirect()->route('crud.artists')->with('success', "--{$artist->name}-- succesfully deleted");
    }
}
