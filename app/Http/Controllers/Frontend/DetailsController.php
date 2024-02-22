<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Type;
use App\Models\Anime;
use App\Models\Genre;
use App\Models\Musim;
use App\Models\Season;
use App\Models\Status;
use App\Models\Studio;
use App\Models\Country;
use App\Models\Episode;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anime = Anime::latest()->get();
        return view('admin.view.anime_admin', ['anime' => $anime]);
    }


    // public function detail()
    // {
    //     $genre = Genre::latest()->get();
    //     $anime = Anime::latest()->first();
    //     return view('streaming.detail', ['genre' => $genre], ['anime' => $anime]);
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah.tambah_anime',[
            'type' => Type::all(),
            'studio' => Studio::all(),
            'status' => Status::all(),
            'country' => Country::all(),
            'musim' => Musim::all(),
            'season' => Season::all(),
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_jepang' => 'required ',
            'nama_inggris' => 'required ',
            'season' => 'required ',
            'type' => 'required ',
            'studio' => 'required ',
            'tanggal' => 'required ',
            'status' => 'required ',
            'musim' => 'required ',
            'country' => 'required ',
            'durasi' => 'required ',
            'sinopsis' => 'required ',
        ]);
        $data = [
            'nama_jepang' => $request->nama_jepang,
            'nama_inggris' => $request->nama_inggris,
            'season' => $request->season,
            'type' => $request->type,
            'studio' => $request->studio,
            'tanggal' => $request->tanggal,
            'status' => $request->status,
            'musim' => $request->musim,
            'country' => $request->country,
            'durasi' => $request->durasi,
            'sinopsis' => $request->sinopsis,
        ];


        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/anime', $file, $filename);
            $data['foto'] = $filename;
        }

        Anime::create($data);

        return redirect()->route('detail.index', $request->anime_id)->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $anime)
    {
        // $anime= Anime::where('id', $anime)->withSum('episodes', 'episode')->first();
        // $episode = Episode::where('anime_id', $anime->id)->latest()->get();
        // dd($episode);
        // return view('admin.view.episode_admin', compact('anime','episode'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anime =Anime::find($id);
        return view('admin.edit.edit_anime', [
            'type' => Type::all(),
            'studio' => Studio::all(),
            'status' => Status::all(),
            'country' => Country::all(),
            'musim' => Musim::all(),
            'season' => Season::all(),
            'anime' => $anime,
        ]);

        return redirect()->route('detail.index');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        $validatedData = $request->validate([
            'nama_jepang' => 'required ',
            'nama_inggris' => 'required ',
            'season' => 'required ',
            'type' => 'required ',
            'studio' => 'required ',
            'tanggal' => 'required ',
            'status' => 'required ',
            'musim' => 'required ',
            'country' => 'required ',
            'durasi' => 'required ',
            'sinopsis' => 'required ',
        ]);
        $anime_colom = [
            'nama_jepang' => $validatedData['nama_jepang'],
            'nama_inggris' => $validatedData['nama_inggris'],
            'season' => $validatedData['season'],
            'type' => $validatedData['type'],
            'studio' => $validatedData['studio'],
            'tanggal' => $validatedData['tanggal'],
            'status' => $validatedData['status'],
            'musim' => $validatedData['musim'],
            'country' => $validatedData['country'],
            'durasi' => $validatedData['durasi'],
            'sinopsis' => $validatedData['sinopsis'],
        ];


        // if ($request->hasFile('foto')) {
        //     $file = $request->file('foto');
        //     $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
        //     $path = Storage::putFileAs('public/anime', $file, $filename);
        //     $data['foto'] = $filename;
        // }
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = Str::random(10) . '.' . $file->getClientOriginalExtension();
            $path = Storage::putFileAs('public/anime', $file, $filename);
            $anime_colom['foto'] = $filename;
        }
    

        
        $anime =  $anime->update($anime_colom);
        return redirect()->route('detail.index')->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anime = Anime::find($id);
        $anime->delete();

        return back()->with('success', 'Data berhasil dihapus.');
    }
}
