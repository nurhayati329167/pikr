<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use App\Models\Profil;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function index(){
        $title = "Daftar Anggota PIK-R";
        $anggotas = Struktur::all();
        $profils = Profil::all();
        return view('profil.struktur.index', compact('title', 'anggotas', 'profils'));
    }
    public function create()
    {
        $title = "Tambah Anggota PIK-R";
        $profils = Profil::all();
        return view ('profil.struktur.create', compact('title', 'profils'));
    }
    public function store(Request $request){
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png',
        ],[
            'nama.required' => 'Nama harus diisi.',
            'jabatan.required' => 'jabatan harus diisi.',
            'gambar.required' => 'Gambar harus diisi.',
        ]);

        $struktur = new Struktur();
        $struktur = Struktur::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/struktur', $request->file('gambar')->getClientOriginalName());
            $struktur->gambar = $request->file('gambar')->getClientOriginalName();
            $struktur->save();
        }
        $struktur->nama = $request->nama;
        $struktur->jabatan = $request->jabatan;
        $jabatan->save();

        return redirect()->route('struktur.index')->with('success','Anggota PIK-R berhasil ditambahkan');
    }
    public function edit($id){
        $title = "Edit Anggota PIK-R";
        $anggota = Struktur::findOrFail($id);
        $profils = Profil::all();
        return view('profil.struktur.edit', compact('title', 'anggota', 'profils'));
    }
    public function update(Request $request, $id){
        $struktur = Struktur::findorfail($id);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/struktur', $request->file('gambar')->getClientOriginalName());
            $struktur->gambar = $request->file('gambar')->getClientOriginalName();
            $struktur->save();
        }

        $struktur->nama = $request->nama;
        $struktur->jabatan = $request->jabatan;
        $struktur->save();
        return redirect()->route('struktur.index')->with('success','Anggota PIK-R berhasil diubah');
    }
    public function destroy($id){
        Struktur::destroy($id);
        $msg = "User Deleted successful! ";
        return redirect('struktur')->with('msg', $msg);
    }
}
