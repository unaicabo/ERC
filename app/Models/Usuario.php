<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'apellido', 'usuario', 'contraseña', 'rol', 'id_grupo'];
    protected $hidden = ['id'];
}
