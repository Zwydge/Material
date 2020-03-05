<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function get(){

        $materials = Materials::all();
        return response()->json(['data'=>$materials],200, [], JSON_NUMERIC_CHECK);
    }

    public function delete(Request $request){

        $materials = Materials::destroy(request('id'));
        return response()->json(['data'=>'success'],200, [], JSON_NUMERIC_CHECK);
    }

    public function create(Request $request){

        $mat= Materials::create([
            'name' => request('name')
        ]);

        return response()->json(['data'=>$mat],200, [], JSON_NUMERIC_CHECK);
    }
}
