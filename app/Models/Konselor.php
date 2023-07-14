<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['nama', 'usia', 'jenis_kelamin', 'level', 'pendidikan', 'foto', 'username', 'password', 'sekolah'];
    protected $primaryKey = 'id_users';
}
