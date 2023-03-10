<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = "grupos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre'];
    protected $hidden = ['id'];

    public function users(){
        return $this->hasMany(User::class);
    }

    public function partidas(){
        return $this->hasMany(Partida::class);
    }
}