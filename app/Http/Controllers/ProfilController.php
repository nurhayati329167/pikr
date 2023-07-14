<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $title = "Profil PIK-Remaja";
        $profils = Profil::all();
        $profil = Profil::findorFail($id);
        return view('profil.edit', compact('title', 'profil', 'profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Profil";
        return view('profil.create', compact('title'));
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
            'keterangan' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'bio' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png',
        ],[
            'judul.required' => 'Judul harus diisi.',
            'keterangan.required' => 'Keterangan harus diisi.',
            'visi.required' => 'Visi harus diisi.',
            'misi.required' => 'Misi harus diisi.',
            'bio.required' => 'Bio harus diisi.',
        ]);

        $image = $request->gambar;
        $namaFile = time().rand(100,999).".".$image->getClientOriginalExtension();
        $profil = new Profil;
        $profil->judul = $request->judul;
        $profil->keterangan = $request->keterangan;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        $profil->bio = $request->bio;
        $profil->gambar = $namaFile;

        $upload_path = 'images/profil';
        $image->move($upload_path, $namaFile);
        $profil->save();

        return redirect()->route('profil.index')->with('success','Profil berhasil ditambahkan');
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
        $title = 'Edit Profil';
        $profil = Profil::findorFail($id);
        $profils = Profil::all();
        return view('profil.edit', compact('title', 'profil', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profil = Profil::findorfail($id);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/profil', $request->file('gambar')->getClientOriginalName());
            $profil->gambar = $request->file('gambar')->getClientOriginalName();
            $profil->save();
        }
        $profil->judul = $request->judul;
        $profil->keterangan = $request->keterangan;
        $profil->visi = $request->visi;
        $profil->misi = $request->misi;
        $profil->nohp = $request->nohp;
        $profil->email = $request->email;
        $profil->ig = $request->ig;
        $profil->fb = $request->fb;
        $profil->save();
        return redirect()->route('profil.edit')->with('success','Profil berhasil diubah');
        // $ubah = Profil::findorfail($id);
        // $awal = $ubah->gambar;

        // $profil =[
        //     'judul' => $request['judul'],
        //     'keterangan' => $request['keterangan'],
        //     'visi' => $request['visi'],
        //     'misi' => $request['misi'],
        //     'gambar' => $awal,
        // ];
        // $request->gambar->move(public_path().'/images/profil', $awal);
        // $ubah->update($profil);
        // return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function update_sosmed(Request $request, Profil $profil)
    {
        $profil->update($request->all());
    
        return redirect()->route('proker.index')
                        ->with('success','Product updated successfully');
    }
}
