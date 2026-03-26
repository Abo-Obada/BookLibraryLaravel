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
        'username'     => 'Test User',
        'email'    => 'test@example.com',
        'password' => '123456',
        'uuid'     => SupportStr::uuid()
    ]);

    $arabicUsers = [
        ['username' => 'محمد العمري',   'email' => 'mohammed@example.com'],
        ['username' => 'فاطمة الزهراء', 'email' => 'fatima@example.com'],
        ['username' => 'عبدالله الحربي','email' => 'abdullah@example.com'],
        ['username' => 'نورة السعيد',   'email' => 'noura@example.com'],
        ['username' => 'يوسف الأحمد',   'email' => 'youssef@example.com'],
    ];

    foreach ($arabicUsers as $user) {
        User::factory()->create([
            'username'     => $user['username'],
            'email'    => $user['email'],
            'password' => '123456',
            'uuid'     => SupportStr::uuid()
        ]);
    }

    $this->call([
        CommentsSeeder::class,
    ]);
}}
