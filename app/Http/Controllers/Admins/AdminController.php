<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     public function me(){
        $auth = Auth::user()->only('username','email','uuid');
        $roles = Auth::user()->getRoleNames();
        return response()->json(['user'=>$auth, 'role'=>$roles]);
   }
}
