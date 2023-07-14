<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use App\Models\Profil;
use Illuminate\Http\Request;

class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Daftar Program Kerja";
        $prokers = Proker::all();
        $profils = Profil::all();
        return view('profil.proker.index', compact('title', 'prokers', 'profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Program Kerja";
        $profils = Profil::all();
        return view('profil.proker.proker', compact('title', 'profils'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_proker'=>'required',
            'keterangan'=>'required'
        ],[
            'judul_proker.required' => 'Judul harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.'
        ]);

        $proker = Proker::create([
            'judul_proker' => $request->judul_proker,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('proker.index')->with('success','Program kerja berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $title = "Edit Program Kerja";
        $proker = Proker::findOrFail($id);
        $profils = Profil::all();
        return view('profil.proker.edit', compact('title', 'proker', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proker $proker)
    {
        $request->validate([
            'judul_proker' => 'required',
            'keterangan' => 'required',
        ],[
            'judul_proker.required' => 'Judul harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.'
        ]);
    
        $proker->update($request->all());
    
        return redirect()->route('proker.index')
                        ->with('success','Prgram kerja berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proker::destroy($id);
        $msg = "User Deleted successful! ";
        return redirect('proker')->with('msg', $msg);
    }
}
