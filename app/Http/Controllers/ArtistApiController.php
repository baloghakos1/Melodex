<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistApiController extends Controller
{
    public function index() {
        $songs = Artist::all();
        return response()->json([
            'songs' => $songs,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'image' => 'nullable|string',
            'description' => 'required|string',
            'is_band' => 'required|string'
        ]);
        $product = Artist::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'image' => 'nullable|string',
            'description' => 'nullable|string',
            'is_band' => 'nullable|string'
        ]);
        $product = Artist::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Artist::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
            'id' => $id
        ]);
    }
}
