<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Passport\HasApiTokens;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Auth;




class UserController extends Controller
{
    public function register(request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|confirmed',
        ]);
        $user=User::create([
            'name'    =>$request->name,
            'email'    =>$request->email,
            'password' =>Hash::make($request->password),
        ]);
        $token=$user->createToken('mytoken')->plainTextToken;
        return response([
            'user'   =>$user,
            'token'  => $token
        ],201);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response([
            'message'=> 'Successfull Logout!!'
        ]);
    }
    public function login(request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);
      $user= User::where('email',$request->email)->first();

      if(!$user|| !Hash::check($request->password,$user->password)){
        return response([
            'message'=>'The provided credentials are incorrect'
        ],401);
      }

      $token=$user->createToken('mytoken')->plainTextToken;
        return response([
            'user'   =>$user,
            'token'  => $token
        ],201);
    }
}
