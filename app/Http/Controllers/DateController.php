<?php

namespace App\Http\Controllers;

use App\Models\Date;
use Illuminate\Http\Request;

class DateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = Date::all();

        return response()->json(['date' => $date], 201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'google_maps_link' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $date = Date::create($request->all());

        return response()->json(['message' => 'Date created successfully', 'date' => $date], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $date = Date::find($id);

        if ($date) {
            return response()->json(['date' => $date], 201);
        } else {
            return response()->json(['message' => 'Date not found'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'location' => 'required|string',
            'google_maps_link' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $date = Date::find($id);

        if ($date) {
            $date->update($validatedData);
            return response()->json(['message' => 'Date updated successfully', 'date' => $date], 201);
        } else {
            return response()->json(['message' => 'Date not found'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $date = Date::find($id);

        if ($date) {
            $date->delete();
            return response()->json(['message' => 'Date deleted successfully'], 201);
        } else {
            return response()->json(['message' => 'Date not found'], 404);
        }
    }
}
