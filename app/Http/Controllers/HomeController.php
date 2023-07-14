<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use App\Models\User;
use App\Models\Artikel;
use App\Models\Proker;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }
    public function index(){
        $level = '3';
        $jumlah_remaja = User::where('level', $level)->get()->count();
        $levels = '2';
        $jumlah_konselor = User::where('level', $levels)->get()->count();
        $profils = Profil::all();
        return view('dashboarded', compact('jumlah_remaja', 'jumlah_konselor', 'profils'));
    }

    public function home_konselor(){
        $users = User::all();
        return view('konselor.dashboard', compact('users'));
    }

    public function homeremaja(){
        $artikels = Artikel::all();
        $profils = Profil::all();
        $proker = Proker::all();
        return view('dashboard', compact('artikels', 'profils', 'proker'));
    }

    public function remaja(){
        return view('remaja.konseling.chat');
    }

    public function readmore_profil(){
        $profil = Profil::all();
        return view('read more.readmore_profil', compact('profil'));
    }
}
