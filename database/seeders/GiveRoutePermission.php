<?php

namespace Database\Seeders;

use App\Models\RouteHasPermission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GiveRoutePermission extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $routes = [['']];

        RouteHasPermission::create([]);
    }
}
