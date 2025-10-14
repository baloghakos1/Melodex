<?php

namespace App\Http\Controllers;
use App\Models\Song;
use Illuminate\Http\Request;

class SongApiController extends Controller
{
    public function index() {
        $songs = Song::all();
        return response()->json([
            'songs' => $songs,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'songwriter' => 'required|string|max:255',
            'album_id' => 'required|exists:albums,id',
        ]);
        $product = Song::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'songwriter' => 'nullable|string|max:255',
            'album_id' => 'nullable|exists:albums,id',
        ]);
        $product = Song::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Song::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
            'id' => $id
        ]);
    }
}
