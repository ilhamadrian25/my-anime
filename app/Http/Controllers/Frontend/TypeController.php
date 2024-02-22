<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Type;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = Type::latest()->get();
        return view('admin.view.type_admin', ['type' => $type]);

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
            'type' => 'required ',
        ]);

        Type::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('type.index')->with('success', 'Data berhasil ditambahkan.');
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
        $type = Type::find($id);
        return view('admin.edit.edit_type', [
            'type' => $type,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'type' => 'required',
        ]);
        $type_colom = [
            'type' => $validatedData['type'],
        ];

        $type =  $type->update($type_colom);
        return redirect()->route('type.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = Type::find($id);
        $type->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
