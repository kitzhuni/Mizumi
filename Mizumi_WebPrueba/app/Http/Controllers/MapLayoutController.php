<?php

namespace App\Http\Controllers;

use App\Models\MapLayout;
use Illuminate\Http\Request;

class MapLayoutController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'event_id' => 'required|exists:events,id',
            'grid_columns' => 'required|integer|min:1|max:20',
            'grid_rows' => 'required|integer|min:1|max:20',
            'chairs_per_table' => 'required|integer|min:1|max:10',
            'elements' => 'required|array'
        ]);

        $layout = MapLayout::updateOrCreate(
            ['event_id' => $validated['event_id']],
            $validated
        );

        return response()->json(['success' => true, 'layout_id' => $layout->id]);
    }
}