<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Silla extends Model
{
    protected $fillable = ['mesa_id', 'posicion_relativa', 'tipo', 'estado'];

    public function mesa()
    {
        return $this->belongsTo(Mesa::class);
    }
}
