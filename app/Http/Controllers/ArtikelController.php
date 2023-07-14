<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Profil;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Artikel";
        $artikels = Artikel::all();
        $profils = Profil::all();
        return view('artikel.index', compact('title','artikels', 'profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Artikel";
        $profils = Profil::all();
        return view('artikel.create', compact('title', 'profils'));
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
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png,svg|max:2048',
        ],[
            'judul.required' => 'Judul harus diisi.',
            'isi.required' => 'Isi artikel harus diisi.',
        ]);

        $artikel = new Artikel();
        $artikel = Artikel::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/artikel', $request->file('gambar')->getClientOriginalName());
            $artikel->gambar = $request->file('gambar')->getClientOriginalName();
            $artikel->save();
        }
        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->save();

        return redirect()->route('artikel.index')->with('success','Artikel berhasil ditambahkan');
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
        $title = "Edit Artikel";
        $artikel = Artikel::findOrFail($id);
        $profils = Profil::all();
        return view('artikel.edit', compact('title', 'artikel', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_artikel)
    {
        $artikel = Artikel::findorfail($id_artikel);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/artikel', $request->file('gambar')->getClientOriginalName());
            $artikel->gambar = $request->file('gambar')->getClientOriginalName();
            $artikel->save();
        }

        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->save();
        return redirect()->route('artikel.index')->with('success','Artikel berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Artikel::destroy($id);
        $msg = "User Deleted successful! ";
        return redirect('artikel')->with('msg', $msg);
    }
}
