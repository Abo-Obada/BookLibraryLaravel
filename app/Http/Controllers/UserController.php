<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
   public function login(Request $request)
{
    $credentials = $request->validate([
    'email'    => 'required|email',
    'password' => 'required',
    ]);

   if(!Auth::attempt($credentials)) {
      throw ValidationException::withMessages([
            'message' => ['The provided credentials are incorrect.'],
        ]);

   }

   Auth::setRememberDuration(43200);
   Auth::attempt($credentials, true);
   return response()->json(['user'=>Auth::user()->only('email','username')]);
   }

   public function logout (Request $request){
    Auth::guard('web')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return response()->json(['message' => 'Logged out successfully']);
   }

   public function me(){ 
     
    $user = Auth::user()->only('username','email');
   return $user;
   }
}

