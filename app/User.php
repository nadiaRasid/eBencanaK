<?php

namespace App;
use App\Pengguna;
use App\LaporKehilangan;
use App\pusatPemindahan;
use App\DataBencana;
use App\AmaranBencana;
use App\KawasanBencana;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function pengguna() {
        return $this->hasOne(Pengguna::class, 'user_id');
    }

    public function LaporKehilangan() {
        return $this->hasMany(LaporKehilangan::class, 'user_id');
    }

    public function pusatPemindahan() {
        return $this->hasMany(pusatPemindahan::class, 'user_id');
    }
    public function DataBencana() {
        return $this->hasMany(DataBencana::class, 'user_id');
    }

    public function AmaranBencana() {
        return $this->hasMany(AmaranBencana::class, 'user_id');
    }

    public function roleCheck($role = null){
        if ($role){
            return $this->role == $role; //userRole kena sama dengan dalam database
        }
        return $this->role;
    }
}
