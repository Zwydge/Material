<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request){
        //get user informations with email
        $user = Users::where('email', request('email'))->get();
        if(!empty($user[0])){
            if (Hash::check(request('password'), $user[0]['password'])) {
                //if password is correct
                return response()->json(['data'=>$user],200, [], JSON_NUMERIC_CHECK);
            }
            else{
                //if password didn't match
                return response()->json(['data'=>'Mauvais mot de passe'],401, [], JSON_NUMERIC_CHECK);
            }
        }
        else{
            //if email doesn't exist
            return response()->json(['data'=>'Cet email n\'existe pas'],402, [], JSON_NUMERIC_CHECK);
        }
    }
}
