<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = "id";
    protected $fillable = ['puntuacion', 'participante_id', 'grupo_id', 'tiempo'];
    protected $hidden = ['id'];
}
