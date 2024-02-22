<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status = Status::latest()->get();
        return view('admin.view.status_admin', ['status' => $status]);

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
            'status' => 'required ',
        ]);

        Status::create($data);

        // seperti ini tapi kita tidak perlu redire

        return redirect()->route('status.index')->with('success', 'Data berhasil ditambahkan.');
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
        $status = Status::find($id);
        return view('admin.edit.edit_status', [
            'status' => $status,
        ]);

        return back()->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $validatedData = $request->validate([
            'status' => 'required',
        ]);
        $status_colom = [
            'status' => $validatedData['status'],
        ];

        $status =  $status->update($status_colom);
        return redirect()->route('status.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $status = Status::find($id);
        $status->delete();

       return back()->with('success', 'Data berhasil dihapus.');
    }
}
