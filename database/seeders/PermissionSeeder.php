<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions =
        [
            //book
            ['name'=>'read book', 'guard_name' => 'sanctum'],
            ['name'=>'edit book', 'guard_name' => 'sanctum'],
            ['name'=>'update book', 'guard_name' => 'sanctum'],
            ['name'=>'create book', 'guard_name' => 'sanctum'],
            ['name'=>'delete book', 'guard_name' => 'sanctum'],

            //category
            ['name'=>'read category', 'guard_name' => 'sanctum'],
            ['name'=>'edit category', 'guard_name' => 'sanctum'],
            ['name'=>'update category', 'guard_name' => 'sanctum'],
            ['name'=>'create category', 'guard_name' => 'sanctum'],
            ['name'=>'delete category', 'guard_name' => 'sanctum'],

            //author
            ['name'=>'read author', 'guard_name' => 'sanctum'],
            ['name'=>'edit author', 'guard_name' => 'sanctum'],
            ['name'=>'update author', 'guard_name' => 'sanctum'],
            ['name'=>'create author', 'guard_name' => 'sanctum'],
            ['name'=>'delete author', 'guard_name' => 'sanctum'],


            //users
            ['name'=>'read users', 'guard_name' => 'sanctum'],
            ['name'=>'edit users', 'guard_name' => 'sanctum'],
            ['name'=>'update users', 'guard_name' => 'sanctum'],
            ['name'=>'create users', 'guard_name' => 'sanctum'],
            ['name'=>'delete users', 'guard_name' => 'sanctum'],

            //roles
            ['name'=>'read roles', 'guard_name' => 'sanctum'],
            ['name'=>'edit roles', 'guard_name' => 'sanctum'],
            ['name'=>'update roles', 'guard_name' => 'sanctum'],
            ['name'=>'create roles', 'guard_name' => 'sanctum'],
            ['name'=>'delete roles', 'guard_name' => 'sanctum'],

             //permission
            ['name'=>'read permissions', 'guard_name' => 'sanctum'],
            ['name'=>'edit permissions', 'guard_name' => 'sanctum'],
            ['name'=>'update permissions', 'guard_name' => 'sanctum'],
            ['name'=>'create permissions', 'guard_name' => 'sanctum'],
            ['name'=>'delete permissions', 'guard_name' => 'sanctum'],

        ];

        foreach ($permissions as $permission) {
        Permission::create($permission);
        }
    }
}
