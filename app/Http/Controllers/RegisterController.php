<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function login()
    {
        return view('auth/login');
    }

    public function aksi_login(Request $request){
        // dd($request);
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ],[
            'username.required' => 'Username harus diisi.',
            'password.required' => 'Password harus diisi.',
        ]);
        
        $credentials = request()->only(['username', 'password']);
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            // dd('cek');
            if($user->level == '1'){
                return redirect()->route('dashboarded')->withHeaders(['Location' => route('dashboarded')]);
            }elseif($user->level == '2'){
                return redirect()->route('dashboard')->with('success', 'Berhasil login!');
            }elseif($user->level == '3'){
                return redirect()->route('chat')->with('success', 'Berhasil login!');
            }else{
                return back()->with('error', 'Login failed!');
            }
        }
    }

    public function daftar(){
        return view('auth.register');
    }
    public function aksi_daftar(Request $request){
        $request->validate([
            'nama' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = new User([
            'nama' => $request->nama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => '3',
        ]);
        $user->save();
        return redirect()->route('chat')->with('success', 'Registrasi sukses!');
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     $request->session()->regenerate();
        //     return redirect('chat');
        // }
        // return redirect()->route('chat');
    }
}
