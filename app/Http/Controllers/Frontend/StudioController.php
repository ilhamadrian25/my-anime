<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Studio;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studio = Studio::latest()->get();
        return view('admin.view.studio_admin', ['studio' => $studio]);

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
            'studio' => 'required ',
        ]);

        Studio::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('studio.index')->with('success', 'Data berhasil ditambahkan.');
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
        $studio = Studio::find($id);
        return view('admin.edit.edit_studio', [
            'studio' => $studio,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Studio $studio)
    {
        $validatedData = $request->validate([
            'studio' => 'required',
        ]);
        $studio_colom = [
            'studio' => $validatedData['studio'],
        ];

        $studio =  $studio->update($studio_colom);
        return redirect()->route('studio.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studio = Studio::find($id);
        $studio->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
