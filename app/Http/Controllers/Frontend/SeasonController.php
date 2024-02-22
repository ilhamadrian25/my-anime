<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Season;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $season = Season::latest()->get();
        return view('admin.view.season_admin', ['season' => $season]);
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
        $data = $request->validate([
            'season' => 'required ',
        ]);

       Season::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('season.index')->with('success', 'Data berhasil ditambahkan.');
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
        $season = Season::find($id);
        return view('admin.edit.edit_season', [
            'season' => $season,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Season $season)
    {
        $validatedData = $request->validate([
            'season' => 'required',
        ]);
        $season_colom = [
            'season' => $validatedData['season'],
        ];

        $season =  $season->update($season_colom);
        return redirect()->route('season.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $season = Season::find($id);
        $season->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
