<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DesiertoLaguna extends Model
{
    use HasFactory;

    protected $table = 'desierto_lagunas';

    protected $fillable = [
        'id_desierto',
        'nombre_desierto_lagunas',
        'id_localities',
        'descripcion'
    ];
}
