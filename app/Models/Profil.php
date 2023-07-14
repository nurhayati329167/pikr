<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = 'profil';
    protected $fillable = ['judul', 'keterangan', 'gambar', 'visi', 'misi', 'bio', 'nohp', 'email', 'fb','ig'];
    protected $primaryKey = 'id';
    
    public function limit()
    {
        return Str::limit($this->keterangan, Profil::LIMIT );
    }

}
