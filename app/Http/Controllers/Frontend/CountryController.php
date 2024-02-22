<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::latest()->get();
        return view('admin.view.country_admin', ['country' => $country]);
        
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
            'country' => 'required ',
        ]);

       Country::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('country.index')->with('success', 'Data berhasil ditambahkan.');
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
        $country = Country::find($id);
        return view('admin.edit.edit_country', [
            'country' => $country,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Country $country)
    {
        $validatedData = $request->validate([
            'country' => 'required',
        ]);
        $country_colom = [
            'country' => $validatedData['country'],
        ];

        $country =  $country->update($country_colom);
        return redirect()->route('country.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $country = Country::find($id);
        $country->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
