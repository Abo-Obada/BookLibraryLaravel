<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class UserController extends Controller
{
   public function login(Request $request)
{
    $credentials = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);
    
   if(!$credentials){
      return response()->json(['message','error']);
   }
   Auth::setRememberDuration(43200);
   Auth::attempt($credentials, true);
}

public function logout(){
  
}


   public function user(){
      return response()->json(['user token data']);
   }
  
}
