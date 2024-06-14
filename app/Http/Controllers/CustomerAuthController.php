<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CustomerAuthController
{
    //
    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            ]);
            // User::
            // classobjects = new ClassName();
            $userco = new User();
            // Set the fields
            // L = R
            $userco->name = $request->fname;
            $userco->surname = $request->sname; 
            $userco->email = $request->email;
            $userco->password = $request->password;

            $result = $userco->save();
            if ($result) {
                // True
                return back()->with('success', 'You have successfully registered');
            }else{
                // False
                // with() method will create session variable
                return back()->with('failed', 'Something went wrong');
            }
            // dd($userco);
            // dd($result);
            // dd($userco->email);
            // dd($userco->password);
            // dd($userco->id);
            // dd($userco->created_at);
            // dd($userco->updated_at);
            // dd($userco->deleted_at);
            // dd($userco->remember_token);
            // dd($userco->name);
            // dd($userco->surname);
            // dd($userco->phone);
            // dd($userco->address);
            // dd($userco->city);
            // dd($userco->country);
            // dd($userco->zip);
            // dd($userco->gender);
            // dd($userco->dob);
            // dd($userco->role);
            // dd($userco->status);
            

            // dd($request->all());
            // Every function returns sumthing
        return 'register';
    }
}
