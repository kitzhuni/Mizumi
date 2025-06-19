<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escenario extends Model
{
    protected $fillable = ['mapa_id', 'posicion_x', 'posicion_y', 'tipo'];

    public function mapa()
    {
        return $this->belongsTo(Mapa::class);
    }
}
