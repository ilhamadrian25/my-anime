<?php

namespace App\Http\Controllers\Auth;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
 use AuthenticatesUsers;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::latest()->get();
        return view('Auth.login', ['genre' => $genre]);
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
       // Validation

       $customMessages = [
        'password.confirmed' => 'Password tidak sama!',
        // Add other custom messages for different rules if needed
    ];
    
    $request->validate([
        'email' => 'required',
        'password' => 'required',
    ],  $customMessages);
    
    $credentials = $request->only('email', 'password');
    
    // Attempt to login
    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        if (Auth::user()->role == 'admin') {
          return response()->json(['message'=>'login berhasil','redirect'=>'/admin/profile']);
        } elseif (Auth::user()->role == 'anggota') {
            return response()->json(['message'=>'Selamat datang di Maonime','redirect'=>'/anggota/profile']);
        } 
          
    } else {
        // Authentication failed
        return response()->json(['message'=>'terjadi kesalahan login, periksa kembali email dan password anda','redirect'=>'/login']);
        // return redirect()->route('login');
    }
    
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        Auth::logout();
        return redirect()->route('login');
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
