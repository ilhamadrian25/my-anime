<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Type;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\Musim;
use App\Models\Season;
use App\Models\Status;
use App\Models\Studio;
use App\Models\Country;
use App\Models\Episode;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EpisodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $episode = Episode::latest()->get();
        $anime = Anime::latest()->get();
        return view('admin.view.episode_admin', ['episode' => $episode], ['anime' => $anime]);
        
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
            'episode' => 'required ',
            'watch' => 'required ',
            'tanggal' => 'required ',
            'type_url_id' => 'required ',
            'anime_id' => 'required'
        ]);

       Episode::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('episode.show', $request->anime_id)->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $anime)
    {
        $anime= Anime::where('id', $anime)->withSum('episodes', 'episode')->first();
        $episode = Episode::where('anime_id', $anime->id)->latest()->get();
        return view('admin.view.episode_admin', compact('anime','episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $episode = Episode::find($id);
        return view('admin.edit.edit_episode', [
            'episode' => $episode,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Episode $episode)
    {
        $validatedData = $request->validate([
            'episode' => 'required',
            'watch' => 'required',
            'tanggal' => 'required',
        ]);
        $episode_colom = [
            'episode' => $validatedData['episode'],
            'watch' => $validatedData['watch'],
            'tanggal' => $validatedData['tanggal'],
        ];

        $episode =  $episode->update($episode_colom);
        return redirect()->route('episode.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $episode = Episode::find($id);
        $episode->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
