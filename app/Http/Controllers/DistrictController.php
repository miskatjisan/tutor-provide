<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    public function index()
    {
        $districts = District::with('division')->get();
        return response()->json($districts);
    }

    public function store(Request $request)
    {
        $district = District::create($request->all());
        return response()->json($district, 201);
    }

    public function show($id)
    {
        $district = District::with('division')->findOrFail($id);
        return response()->json($district);
    }

    public function update(Request $request, $id)
    {
        $district = District::findOrFail($id);
        $district->update($request->all());
        return response()->json($district, 200);
    }

    public function destroy($id)
    {
        $district = District::findOrFail($id);
        $district->delete();
        return response()->json(null, 204);
    }
}
