<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DateController extends Controller
{
    public function store(Request $request)
    {
        Log::info('Attempting to store date:', $request->all());

        $request->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'google_maps_link' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        try {
            $date = Date::create($request->all());

            Log::info('Date stored successfully:', $date->toArray());

            return response()->json(['message' => 'Date created successfully', 'date' => $date], 201);
        } catch (\Exception $e) {
            Log::error('Error storing date:', ['error' => $e->getMessage()]);
            return response()->json(['error' => 'Error storing date'], 500);
        }
    }
}
