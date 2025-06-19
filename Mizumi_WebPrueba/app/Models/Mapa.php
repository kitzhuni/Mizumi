<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapa extends Model
{
    use HasFactory;

    protected $fillable = [
        'restaurante_id',
        'x',
        'y',
        'width',
        'height',
        'label',
        'type',
        'styles', // Para almacenar JSON si es necesario
    ];

    protected $casts = [
        'styles' => 'array', // Esto convierte el campo 'styles' en un array
    ];
}
