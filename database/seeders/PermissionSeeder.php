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
            ['name'=>'read book'],
            ['name'=>'edit book'],
            ['name'=>'update book'],
            ['name'=>'create book'],
            ['name'=>'delete book'],

            //category
            ['name'=>'read category'],
            ['name'=>'edit category'],
            ['name'=>'update category'],
            ['name'=>'create category'],
            ['name'=>'delete category'],

            //author
            ['name'=>'read author'],
            ['name'=>'edit author'],
            ['name'=>'update author'],
            ['name'=>'create author'],
            ['name'=>'delete author'],


            //users
            ['name'=>'read users'],
            ['name'=>'edit users'],
            ['name'=>'update users'],
            ['name'=>'create users'],
            ['name'=>'delete users'],

            //roles
            ['name'=>'read roles'],
            ['name'=>'edit roles'],
            ['name'=>'update roles'],
            ['name'=>'create roles'],
            ['name'=>'delete roles'],

             //permission
            ['name'=>'read permissions'],
            ['name'=>'edit permissions'],
            ['name'=>'update permissions'],
            ['name'=>'create permissions'],
            ['name'=>'delete permissions'],

        ];

        foreach ($permissions as $permission) {
        Permission::create($permission);
        }
    }
}
