<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Takes;
use Illuminate\Http\Request;

class TakesController extends Controller
{
    public function create(Request $request){

        $takes = Takes::create([
            'user_id' => request('user_id'),
            'material_id' => request('material_id')
        ]);

        return response()->json(['data'=>$takes],200, [], JSON_NUMERIC_CHECK);
    }
}
