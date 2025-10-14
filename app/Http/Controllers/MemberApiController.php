<?php

namespace App\Http\Controllers;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberApiController extends Controller
{
    public function index() {
        $songs = Member::all();
        return response()->json([
            'songs' => $songs,
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'instrument' => 'required|string|max:255',
            'year' => 'required|integer',
            'artist_id' => 'required|exists:artists,id',
            'image' => 'nullable|string'
        ]);
        $product = Member::create($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {

        $request->validate([
            'name' => 'nullable|string|max:255',
            'instrument' => 'nullable|string|max:255',
            'year' => 'nullable|integer',
            'artist_id' => 'nullable|exists:artists,id',
            'image' => 'nullable|string'
        ]);
        $product = Member::findOrFail($id);
        $product->update($request->all());

        return response()->json([
            'product' => $product,
        ]);
    }

    public function destroy($id)
    {
        $product = Member::findOrFail($id);
        $product->delete();
        return response()->json([
            'message' => 'Product deleted successfully',
            'id' => $id
        ]);
    }
}
