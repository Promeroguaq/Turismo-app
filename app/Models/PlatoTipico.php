<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlatoTipico extends Model
{
    use HasFactory;

    protected $table = 'plato_tipicos';

    protected $fillable = [
        'nombre',
        'categoria',
        'departamento',
        'region',
        'descripcion'
    ];
}
