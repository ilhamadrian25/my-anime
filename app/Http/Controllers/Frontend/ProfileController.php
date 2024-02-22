<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Genre;
use App\Models\Profile;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::latest()->get();
        if (Auth::user()->role == 'admin') :
            $profile = User::find(auth()->user()->id)->first();
            return view('profile.profile_admin',['genre' => $genre], compact('profile'));
        elseif (Auth::user()->role == 'anggota') :
            $profile = User::find(auth()->user()->id)->first();
            return view('profile.profile_anggota',['genre' => $genre], compact('profile'));
        endif;
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
