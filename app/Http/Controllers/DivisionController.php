<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        $divisions = Division::all();
        return response()->json($divisions);
    }

    public function store(Request $request)
    {
        $division = Division::create($request->all());
        return response()->json($division, 201);
    }

    public function show($id)
    {
        $division = Division::findOrFail($id);
        return response()->json($division);
    }

    public function update(Request $request, $id)
    {
        $division = Division::findOrFail($id);
        $division->update($request->all());
        return response()->json($division, 200);
    }

    public function destroy($id)
    {
        $division = Division::findOrFail($id);
        $division->delete();
        return response()->json(null, 204);
    }
}