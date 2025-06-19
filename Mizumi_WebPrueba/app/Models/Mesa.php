<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $fillable = ['mapa_id', 'posicion_x', 'posicion_y', 'numero_mesa'];

    public function mapa()
    {
        return $this->belongsTo(Mapa::class);
    }

    public function sillas()
    {
        return $this->hasMany(Silla::class);
    }
}
