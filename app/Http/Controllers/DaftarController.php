<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    
    public function index(){
        return view('auth.register');
    }
    public function register(){
        // dd($request);
        $request->validate([
            'nama' => 'required',
            'usia' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'pendidikan' => 'required',
            'password' => 'required',
        ]);

        $data['nama'] = $request->nama;
        $data['usia'] = $request->usia;
        $data['jenis_kelamin'] = $request->jenis_kelamin;
        $data['pendidikan'] = $request->pendidikan;
        $data['username'] = $request->username;
        $data['password'] = Hash::make($request->password);

        User::create($data);
        $login = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        
        if(Auth::attemp($login)){
            return redirect()->route('chat');
        }else{
            return redirect()->route('login')->with('failed', 'Email atau Password salah');
        }
        // $user = new User([
        //     'nama' => $request->nama,
        //     'usia' => $request->usia,
        //     'jenis_kelamin' => $request->jenis_kelamin,
        //     'pendidikan' => $request->pendidikan,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        //     'level' => '3',
        // ]);
        // $user->save();

        // return redirect()->route('chat');
    }
}
