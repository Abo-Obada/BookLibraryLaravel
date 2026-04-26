<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Stevebauman\Purify\Facades\Purify;

class RoleController extends Controller
{
    public function get()
    {
        $roles = Role::select(['id','name'])->paginate(1);

        return response()->json($roles);
    }
    public function store(Request $request){
        $validated = $request->validate(['name'=>'required']);
        if(!$validated){
           return response()->json(['message'=> 'error'],422);
        }
    $pure = Purify::clean($validated['name']);
     Role::create(['name'=> $pure,'guard_name'=>'sanctum']);
    return response()->json(['message'=> 'success'],200);
    }

    public function update(Request $request, $id){
        $validated = $request->validate(['name'=>'required']);
        if(!$validated){
           return response()->json(['message'=> ''],422);
        }
        $pureId = Purify::clean($id);
        $pure = Purify::clean($validated['name']);
     Role::where('id', $pureId)->update(['name'=> $pure,'guard_name'=> 'sanctum']);
    return response()->json(['message'=> 'success'],200);
    }
}
