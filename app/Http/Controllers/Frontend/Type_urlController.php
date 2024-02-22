<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Type_url;
use Illuminate\Http\Request;

class Type_urlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $type_url = Type_url::latest()->get();
        return view('admin.view.type_url_admin');
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
            'embed' => 'required '
        ]);

       Type_url::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('type_url.index')->with('success', 'Data berhasil ditambahkan.');
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
        $type_url = Type_url::find($id);
        return view('admin.edit.edit_type_url', [
            'type_url' => $type_url,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type_url $type_url)
    {
        $validatedData = $request->validate([
            'type' => 'required ',
            'embed' => 'required '
        ]);
        $type_url_colom = [
            'type' => $validatedData['type'],
            'embed' => $validatedData['embed'],
        ];

        $type_url =  $type_url->update($type_url_colom);
        return redirect()->route('type_url.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type_url = Type_url::find($id);
        $type_url->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
