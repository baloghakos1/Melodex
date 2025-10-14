<?php

namespace App\Http\Controllers;
use App\Models\Album;
use Illuminate\Http\Request;

class AlbumApiController extends Controller
{
    public function index() {
        $songs = Album::all();
        return response()->json([
            'songs' => $songs,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'cover' => 'nullable|string|',
            'year' => 'required|integer',
            'genre' => 'required|string|max:255',
            'artist_id' => 'required|exists:artists,id'
        ]);
        $product = Album::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'cover' => 'nullable|string|',
            'year' => 'nullable|integer',
            'genre' => 'nullable|string|max:255',
            'artist_id' => 'nullable|exists:artists,id'
        ]);
        $product = Album::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Album::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
            'id' => $id
        ]);
    }
}
