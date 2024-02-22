<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::latest()->get();
        return view('Auth.register', ['genre' => $genre]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // print_r($request);
        // kita masukan data yang diimput kedalam variable dulu
        $customMessages = [
            'password.confirmed' => 'Password dan Konfirmasi tidak sama!',
            // Add other custom messages for different rules if needed
        ];

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ], $customMessages);

        $data['role']='anggota';

        $data['password'] = bcrypt($data['password']);
        // Ini model
        // untuk validasi password kita bikin sendir dengan if else condition
        User::create($data);

        // Nah disini kita kirm pesan ke client(pengguna jika insert berhasil)

        return response()->json(
            [
            'status' => true,
            'message' => 'Akun berhasil di registrasi'
            ],200
        );
        
        return redirect()->route('login');

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
