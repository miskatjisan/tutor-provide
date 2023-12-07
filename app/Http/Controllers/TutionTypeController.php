<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tution_type;

class TutionTypeController extends Controller
{
    public function index()
    {
        $tution_types = Tution_type::all();
        return response()->json($tution_types);
    }
    public function store(Request $request)
    {
        $tution_type = Tution_type::create($request->post());
        return response()->json([
            'message'=>'Tution type Created Successfully!!',
            'tution_type'=>$tution_type
        ]);
    }
    public function show(Tution_type $tution_type)
    {
        return response()->json($tution_type);
    }
    public function update(Request $request, Tution_type $tution_type)
    {
        $tution_type->fill($request->post())->save();
        return response()->json([
            'message'=>'Tution type Updated Successfully!!',
            'tution_type'=>$tution_type
        ]);
    }

    public function destroy(Tution_type $tution_type)
    {
        $tution_type->delete();
        return response()->json([
            'message'=>'Tution type Deleted Successfully!!'
        ]);
    }
}
