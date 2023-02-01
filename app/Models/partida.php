<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partida extends Model
{
    use HasFactory;

    protected $table = "partidas";
    protected $primaryKey = "id";
    protected $fillable = ['user_id','dificultad','tiempo','grupo_id'];
    protected $hidden = ['id'];

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
