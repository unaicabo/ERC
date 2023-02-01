<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "users";
    protected $fillable = ['name','apellido','email','imagen','password','username','rol','grupo_id',];
    protected $hidden = ['password','remember_token'];
    protected $casts = ['email_verified_at' => 'datetime',];

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function partidas(){
        return $this->hasMany(Partida::class);
    }
}
