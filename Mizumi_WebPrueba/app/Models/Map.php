<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'columns',
        'rows',
        'objects',
        'scenario_quantity',
        'clue_quantity',
        'table_quantity',
        'chairs_per_table',
        'adult_chair_price',
        'child_chair_price',
        'infant_chair_price'
    ];

    protected $casts = [
        'objects' => 'array',
    ];
}