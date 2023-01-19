<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = "id";
    protected $fillable = ['puntuacion', 'participante_id', 'grupo_id', 'hora_inicio'];
    protected $hidden = ['id'];
}
