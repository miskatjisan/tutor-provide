<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::with('division','district')->get();
        return response()->json($areas);
    }

    public function store(Request $request)
    {
        $area = Area::create($request->all());
        return response()->json($area, 201);
    }

    public function show($id)
    {
        $area = Area::with('division','district')->findOrFail($id);
        return response()->json($area);
    }

    public function update(Request $request, $id)
    {
        $area->update($request->all());
        return response()->json($area, 200);
    }

    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();
        return response()->json(null, 204);
    }
}
