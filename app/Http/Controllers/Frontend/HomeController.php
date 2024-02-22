<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Home;
use App\Models\Type;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\Musim;
use App\Models\Season;
use App\Models\Status;
use App\Models\Studio;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Episode;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::latest()->get();
        $season = Season::latest()->get();
        $anime = Anime::latest()->get();
        return view('home.home', ['genre' => $genre], ['anime' => $anime], ['season' => $season]);
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
    public function show( $anime)
    {
        $genre = Genre::latest()->get();
        $anime= Anime::where('id', $anime)->with('episodes')->first();
        $type = Type::all();
        $studio = Studio::all();
        $status = Status::all();
        $genre = Genre::all();
        $country = Country::all();
        $musim = Musim::all();
        $season = Season::all();
        $episode = Episode::latest()->first();
        // $anime = Anime::with('episodes')->first();
        return view('streaming.detail', compact('anime',  'type', 'studio', 'status', 'genre', 'country', 'musim', 'season', 'episode'));
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

    public function show2()
    {
        $genre = Genre::latest()->get();
        return view('streaming.watch', ['genre' => $genre]);
    }
}
