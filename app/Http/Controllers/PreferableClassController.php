<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Preferable_class;

class PreferableClassController extends Controller
{
    public function index()
    {
        $preferable_classes = Preferable_class::with('category')->get();
        return response()->json($preferable_classes);
    }

    public function store(Request $request)
    {
        $preferable_class = Preferable_class::create($request->all());
        return response()->json($preferable_class, 201);
    }

    public function show($id)
    {
        $preferable_class = Preferable_class::with('category')->findOrFail($id);
        return response()->json($preferable_class);
    }

    public function update(Request $request, $id)
    {
        $preferable_class = Preferable_class::findOrFail($id);
        $preferable_class->update($request->all());
        return response()->json($preferable_class, 200);
    }

    public function destroy($id)
    {
        $preferable_class = Preferable_class::findOrFail($id);
        $preferable_class->delete();
        return response()->json(null, 204);
    }
}
