<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Purify\Facades\Purify;

class AdminController extends Controller
{
     public function me(){
        $auth = Auth::user()->only('username','email','uuid');
        $roles = Auth::user()->getRoleNames();
        if(Auth::user()->roles->count() == 0){
        return response()->json(['message'=>'لا يمكنك الدخول إلى الصفحة'],403);
        }

        return response()->json(['user'=>$auth, 'role'=>$roles]);
   }

   public function login(Request $request){
    $validated = $request->validate(['email' => 'required|email','password'=> 'required']);
    if(!Auth::attempt($validated)){
        return response()->json(['message'=> 'المعلومات غير صحيحة'],400);
    }
     $roleCount = Auth::user()->roles->count();
     if($roleCount == 0){
        return response()->json(['message'=> 'ليس لديك صلاحية للدخول للصفحة'],403);
     }
    Auth::setRememberDuration(43200);
    $email = Purify::clean($request['email']);
    $password = Purify::clean($request['password']);
    $remember = Purify::clean($request['remember']);
    $remember = !empty($remember) ? 1 : 0;
    Auth::attempt(['email'=> $email,'password'=> $password],$remember);
    return response()->json(['message'=> 'access granted!'],200);
   }
}
