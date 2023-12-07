<?php

namespace App\Http\Controllers;

use App\Models\LivingLocation;
use Illuminate\Http\Request;

class LivingLocationController extends Controller
{
    public function index()
    {
        $livingLocations = LivingLocation::with('division','district','area')->get();
        return response()->json($livingLocations);
    }

    public function store(Request $request)
    {
        $livingLocation = LivingLocation::create($request->all());
        return response()->json($livingLocation, 201);
    }

    public function show($id)
    { 
        $livingLocation = LivingLocation::with('division','district','area')->findOrFail($id);
        return response()->json($livingLocation);
    }

    public function update(Request $request, $id)
    {
        $livingLocation = LivingLocation::findOrFail($id);
        $livingLocation->update($request->all());
        return response()->json($livingLocation, 200);
    }

    public function destroy($id)
    {
        $livingLocation = LivingLocation::findOrFail($id);
        $livingLocation->delete();
        return response()->json(null, 204);
    }
}
