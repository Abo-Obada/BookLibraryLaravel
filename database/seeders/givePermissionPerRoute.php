<?php

namespace Database\Seeders;

use App\Models\RouteHasPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class givePermissionPerRoute extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      $create = new RouteHasPermission();
      $route = Route::getRoutes();
        $routeName[] = null;
    foreach ($route->getRoutes() as $key => $value) {
       $routeName = array_filter($routeName, fn($value) => $value !== null && $value !== 'sanctum/csrf-cookie');
        array_push($routeName, $value);
    }

     foreach ($routeName as $key => $value) {
        $create->create(['route'=> $value->uri, 'method'=> $value->methods[0],'permission_id'=>'1']);
     }
    }
}
