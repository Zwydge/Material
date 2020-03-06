<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Users;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $request){

        //create new user with request informations

        $user = Users::create([
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        //create an array for the return structure

        $user = array($user);

        return response()->json(['data'=>$user],200, [], JSON_NUMERIC_CHECK);
    }
}
