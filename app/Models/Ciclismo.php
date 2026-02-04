<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclismo extends Model
{
    use HasFactory;

    protected $table = 'ciclismo';

    protected $fillable = [
        'nombre_ruta_ciclismo',
        'id_localities',
        'descripcion',
    ];
}