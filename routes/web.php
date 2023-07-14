<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProkerController;
use App\Http\Controllers\KonselorController;
use App\Http\Controllers\StrukturController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RemajaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RegisterController;
use App\Events\HelloEvent;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'homeremaja']);

Route::get('register', [RegisterController::class, 'daftar'])->name('daftar');
Route::post('aksi/register', [RegisterController::class, 'aksi_daftar'])->name('aksi.register');

Route::get('/login', [RegisterController::class, 'login'])->name('login');
Route::post('aksi/login', [RegisterController::class, 'aksi_login'])->name('aksi.login');

Route::get('password', [LoginController::class, 'password'])->name('password');
Route::post('password', [LoginController::class, 'password_action'])->name('password.action');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::group(['middleware' => 'admin'], function(){
        Route::get('dashboarded', [HomeController::class, 'index'])->name('dashboarded');
        Route::resource('artikel', ArtikelController::class);
        Route::resource('proker', ProkerController::class);
        Route::resource('konselor', KonselorController::class);
        Route::resource('struktur', StrukturController::class);
        Route::resource('profil', ProfilController::class);
        Route::resource('remaja', RemajaController::class);
        Route::resource('laporan', LaporanController::class);
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => 'konselor'], function(){
        Route::get('dashboard', [HomeController::class, 'home_konselor'])->name('dashboard');
        Route::get('/chat/konselor', [ChatController::class, 'index']);
        Route::get('read-remaja', [PostController::class, 'read_remaja']);
        
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
    Route::group(['middleware' => 'user'], function(){
        Route::get('chat', [ChatController::class, 'remaja'])->name('chat');
        Route::post('/chat', [ChatController::class, 'saveMessage'])->name('chat.save');
        Route::get('/load', [ChatController::class, 'loadMessage'])->name('load');
        Route::post('/room', [RoomController::class, 'create'])->name('room.create');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
    
});


Route::get('send-event', function(){
    broadcast(new HelloEvent);
});
