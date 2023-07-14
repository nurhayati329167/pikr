<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function read_remaja(){
        $title = "Data Remaja";
        $level = '3';
        $remaja = User::where('level', $level)->get();
        return view('konselor.konselor.dataremaja', compact('title', 'remaja'));
    }
}
