<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MapLayout extends Model
{
    protected $fillable = [
        'event_id',
        'layout_data',
        'grid_columns',
        'grid_rows',
        'chairs_per_table'
    ];

    protected $casts = [
        'layout_data' => 'array' // Convierte JSON a array automáticamente
    ];

    // Relación con Evento
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
