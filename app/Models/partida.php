<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = "id";
    protected $fillable = ['puntuacion', 'participante_id','dificultad', 'hora_inicio', 'hora_fin','grupo_id'];
    protected $hidden = ['id'];
}
