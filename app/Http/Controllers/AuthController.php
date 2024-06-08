<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 

class AuthController 
{
    //

    //
    public function login(Request $request){
        //Serverside validation
        //1. Validate our incomming data
        $request->validate([
                                'email'=>'required|email:users',
                                'password'=>'required|min:8|max:25'
                           ]);

        
        //2. Check with users table if email exists or not
        //Query with DB
        //1. QueryBuilder
        //2. Eleqouent
        //ClassName::method(actualArg1,actualArg2,..)
        $user = User::where('email','=',$request->email)->first();
        dd($user);
        dd($request->all());
        return 'login';
}
}