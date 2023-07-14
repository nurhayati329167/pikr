<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;

class KonselorController extends Controller
{

    public function home_konselor(){
        return view('konselor.konselor.dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Konselor";
        $level = '2';
        $users = User::where('level', $level)->get();
        $profils = Profil::all();
        return view('konselor.index', compact('title', 'users', 'profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Tambah Konselor";
        $profils = Profil::all();
        return view ('konselor.create', compact('title', 'profils'));
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
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'pendidikan' => 'required',
            'foto' => 'required|mimes:jpg,jpeg,png',
            'username' => 'required',
            'password' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi.',
            'usia.required' => 'Usia harus diisi.',
            'jenis_kelamin.required' => 'Jenis kelamin harus diisi.',
            'pendidikan.required' => 'Pendidikan harus diisi',
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi',
        ]);

        $konselor = new Konselor();
        $konselor = Konselor::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('images/konselor', $request->file('foto')->getClientOriginalName());
            $konselor->foto = $request->file('foto')->getClientOriginalName();
            $konselor->save();
        }
        $konselor->nama = $request->nama;
        $konselor->usia = $request->usia;
        $konselor->jenis_kelamin = $request->jenis_kelamin;
        $konselor->pendidikan = $request->pendidikan;
        $konselor->username = $request->username;
        $konselor->password =  Hash::make($request->new_password);
        $konselor->save();


        return redirect()->route('konselor.index')->with('success','Data konselor berhasil ditambahkan');
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
        $title = "Edit Data Konselor";
        $konselor = Konselor::findOrFail($id);
        $profils = Profil::all();
        return view('konselor.edit', compact('title', 'konselor', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_users)
    {
        $konselor = Konselor::findorfail($id_users);

        if($request->hasFile('foto')){
            $request->file('foto')->move('images/konselor', $request->file('foto')->getClientOriginalName());
            $konselor->foto = $request->file('foto')->getClientOriginalName();
            $konselor->save();
        }

        $konselor->nama = $request->nama;
        $konselor->usia = $request->usia;
        $konselor->jenis_kelamin = $request->jenis_kelamin;
        $konselor->pendidikan = $request->pendidikan;
        $konselor->username = $request->username;
        $konselor->password = $request->password;
        $konselor->save();
        return redirect()->route('konselor.index')->with('success','Data konselor berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Konselor::destroy($id);
        $msg = "User Deleted successful! ";
        return redirect('konselor')->with('msg', $msg);
    }
}
