<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservacion extends Model
{
    use HasFactory;

    // Especifica el nombre de la tabla (opcional si sigue convenciones de Laravel)
    protected $table = 'reservacions';

    protected $fillable = [
        'fecha',
        'comida',
        'horario',
        'mesa',
        'asientos',
        'adultos',
        'menores',
        'nombre_completo',
        'telefono',
        'email',
        'tipo',
        'habitacion'
    ];
}