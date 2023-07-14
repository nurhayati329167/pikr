<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'level',
        'foto',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    // public function level(){
    //     return $this->belongsTo('App\Models\Konselor');
    // }

    // public function messages()
    // {
    //     return $this->hasMany(Message::class);
    // }

    public function canJoinRoom($roomId){
        $grantes = false;
        $room = Room::findOrFial($roomId);
        $users = explode(":", $room->users);
        foreach($users as $id){
            if($this->id == $id){
                $granted = true;
            }
        }
        return $granted;
    }
}
