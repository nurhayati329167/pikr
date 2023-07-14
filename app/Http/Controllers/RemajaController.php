<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;

class RemajaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Data Remaja";
        $level = '3';
        $users = User::where('level', $level)->get();
        $profils = Profil::all();
        return view('remaja.index', compact('title', 'users', 'profils'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        $title = "Edit Data Remaja";
        $remaja = User::findorfail($id);
        $profils = Profil::all();
        return view('remaja.edit', compact('title', 'remaja', 'profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $remaja)
    {
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'pendidikan' => 'required',
            'username' => 'required',
            'password' => 'required',
        ],[
            'nama.required' => 'Nama harus diisi.',
            'usia.required' => 'Usia harus diisi.',
            'pendidikan.required' => 'Pendidikan harus diisi.',
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);
        // $remaja =[
        //     'nama' => $request['nama'],
        //     'usia' => $request['usia'],
        //     'pendidikan' => $request['pendidikan'],
        //     'username' => $request['username'],
        //     'password' => $request['password'],
        // ];
    
        $remaja->update($request->all());
    
        return redirect()->route('remaja.index')
                        ->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        $msg = "User Deleted successful! ";
        return redirect('proker')->with('msg', $msg);
    }
}
