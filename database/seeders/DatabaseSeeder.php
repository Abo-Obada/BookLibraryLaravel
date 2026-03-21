<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str as SupportStr;

class DatabaseSeeder extends Seeder
{

public function run()
{
    $this->call([
        BooksSeeder::class,
        Bookcoversseeder::class,
        Authorsseeder::class,
        Authorbooksseeder::class,
        Bookcontentsseeder::class,
        Authordetailsseeder::class,
        CategorySeeder::class,
    ]);

    User::factory()->create([
        'name'     => 'Test User',
        'email'    => 'test@example.com',
        'password' => '123456',
        'uuid'     => SupportStr::uuid()
    ]);

    $arabicUsers = [
        ['name' => 'محمد العمري',   'email' => 'mohammed@example.com'],
        ['name' => 'فاطمة الزهراء', 'email' => 'fatima@example.com'],
        ['name' => 'عبدالله الحربي','email' => 'abdullah@example.com'],
        ['name' => 'نورة السعيد',   'email' => 'noura@example.com'],
        ['name' => 'يوسف الأحمد',   'email' => 'youssef@example.com'],
    ];

    foreach ($arabicUsers as $user) {
        User::factory()->create([
            'name'     => $user['name'],
            'email'    => $user['email'],
            'password' => '123456',
            'uuid'     => SupportStr::uuid()
        ]);
    }

    $this->call([
        CommentsSeeder::class,
    ]);
}}
