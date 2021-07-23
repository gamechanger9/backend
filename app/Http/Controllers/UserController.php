<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $credentials=$request->only('email','password');

        $user=Auth::attempt($credentials);
        if($user)
        {
            $user=Auth::user();
            $token=Str::random(80);
            $user->api_token=$token;
            $user->save();
            return response()->json(["user"=>$user,"token"=>$user->api_token]);
        }
        else
        {
            return response()->json(["message"=>"Incorrect details"],403);
        }
    }

    public function signup(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'confirm_password'=>'required',
            'type'=>'required'
        ]);

        if($request->password==$request->confirm_password)
        {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email, 
                'password'=>Hash::make($request->password),
                'type'=>$request->type,
            ]);
            return response()->json(["message"=>"User created successfully"]);
        }
        return response()->json(["message"=>"passwords must match"],422);
    }
    

}
