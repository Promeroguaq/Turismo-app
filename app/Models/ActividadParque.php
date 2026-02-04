<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActividadParque extends Model
{
    use HasFactory;

    protected $table = 'actividad_parques';

    protected $fillable = [
        'id_actividad',
        'nombre_actividad_en_parque',
        'id_localitites',
        'descripcion'
    ];
}
