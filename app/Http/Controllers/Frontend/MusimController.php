<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Musim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MusimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musim = Musim::latest()->get();
        return view('admin.view.musim_admin', ['musim' => $musim]);
        
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
            'musim' => 'required ',
        ]);

       Musim::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('musim.index')->with('success', 'Data berhasil ditambahkan.');
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
        $musim = Musim::find($id);
        return view('admin.edit.edit_musim', [
            'musim' => $musim,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Musim $musim)
    {
        $validatedData = $request->validate([
            'musim' => 'required',
        ]);
        $musim_colom = [
            'musim' => $validatedData['musim'],
        ];

        $musim =  $musim->update($musim_colom);
        return redirect()->route('musim.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $musim = Musim::find($id);
        $musim->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
