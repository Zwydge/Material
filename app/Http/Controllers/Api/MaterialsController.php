<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    public function get(){

        //get all materials

        $materials = Materials::all();
        return response()->json(['data'=>$materials],200, [], JSON_NUMERIC_CHECK);
    }

    public function delete(Request $request){

        //delete a materiel with his id

        $materials = Materials::destroy(request('id'));
        $success = array([
            "type"=>"success"
        ]);
        return response()->json(['data' => $success],200, [], JSON_NUMERIC_CHECK);
    }

    public function add(Request $request){

        //add a new material with request informations

        $mat= Materials::create([
            'name' => request('name')
        ]);

        return response()->json(['data'=>$mat],200, [], JSON_NUMERIC_CHECK);
    }
}
