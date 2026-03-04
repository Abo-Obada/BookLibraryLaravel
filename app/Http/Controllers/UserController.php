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
}

