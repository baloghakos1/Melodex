<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Artist;

class MemberCrudController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::with(['artist'])->get();
        return view('crud.members', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $artists = Artist::all();

        return view('crud.member_create', compact('artists'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'instrument' => 'required|string|max:255',
            'year' => 'required|integer|max:3000',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $member = new Member();
        $member->name = $request->name;
        $member->instrument = $request->instrument;
        $member->year = $request->year;
        $member->artist_id = $request->artist_id;
        $member->image = $request->image;
        $member->save();

        return redirect()->route('crud.members')->with('success', "--{$member->name}-- Successfully created!");
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
        $member = Member::find($id);
        $artists = Artist::all();

        return view('crud.member_edit', compact('member', 'artists'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'instrument' => 'required|string|max:255',
            'year' => 'required|integer|max:3000',
            'artist_id' => 'required|exists:artists,id',
        ]);

        $member = Member::find($id);
        $member->name = $request->name;
        $member->instrument = $request->instrument;
        $member->year = $request->year;
        $member->artist_id = $request->artist_id;
        $member->image = $request->image;
        $member->save();

        return redirect()->route('crud.members')->with('success', "Successful edit!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('crud.members')->with('success', "--{$member->name}-- succesfully deleted");
    }
}
