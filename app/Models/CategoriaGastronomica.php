<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaGastronomica extends Model
{
    use HasFactory;

    protected $table = 'categorias_gastronomicas';
    protected $primaryKey = 'id_categoria_gastronomica';
    protected $fillable = [
        'nombre_categoria_gastronomica',
        'id_localities'
    ];

    // Relación con Localities si existe
    // public function locality() {
    //     return $this->belongsTo(Locality::class, 'id_localities');
    // }
}
