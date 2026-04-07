<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
        ['name'=>'owner', 'guard_name'=>'sanctum'],
        ['name'=>'admin', 'guard_name'=>'sanctum'],
        ];

        foreach ($roles as $role) {
        Role::create($role);
        }
    }
}
