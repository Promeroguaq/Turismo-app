<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipios';
    protected $primaryKey = 'id_municipios';

    protected $fillable = [
        'nombre_municipios',
        'id_localities',
        'descripcion'
    ];
}
