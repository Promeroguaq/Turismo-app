<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeporteAventura extends Model
{
    use HasFactory;

    protected $table = 'deportes_aventura';

    protected $fillable = [
        'nombre',
        'locality_id',
        'descripcion',
    ];

    // Relación
    public function locality()
    {
        return $this->belongsTo(Locality::class);
    }
}