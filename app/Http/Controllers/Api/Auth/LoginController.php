<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){

        $user = Users::where('email', request('email'))->get('password');
        if(!empty($user[0])){
            if (Hash::check(request('password'), $user[0]['password'])) {
                return response()->json(['data'=>'connected'],200, [], JSON_NUMERIC_CHECK);
            }
            else{
                return response()->json(['data'=>'Mauvais mot de passe'],401, [], JSON_NUMERIC_CHECK);
            }
        }
        else{
            return response()->json(['data'=>'Cet email n\'existe pas'],401, [], JSON_NUMERIC_CHECK);
        }
    }
}
