<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::latest()->get();
        return view('admin.view.genre_admin', ['genre' => $genre]);
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
            'genre' => 'required ',
        ]);

        Genre::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('genre.index')->with('success', 'Data berhasil ditambahkan.');
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
        $genre = Genre::find($id);
        return view('admin.edit.edit_genre', [
            'genre' => $genre,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Genre $genre)
    {
        $validatedData = $request->validate([
            'genre' => 'required',
        ]);
        $genre_colom = [
            'genre' => $validatedData['genre'],
        ];

        $genre =  $genre->update($genre_colom);
        return redirect()->route('genre.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $genre = Genre::find($id);
        $genre->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
