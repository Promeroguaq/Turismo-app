<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservaParque extends Model
{
    use HasFactory;

    protected $table = 'reserva_parques';

    protected $fillable = [
        'nombre',
        'locality_id',
        'descripcion',
        'region_id'
    ];
}
