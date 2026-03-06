<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Authorbooksseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $authorBooks = [
            ['id' => 1,  'book_id' => 1,  'author_id' => 1,  'created_at' => '2023-01-10 08:00:00', 'updated_at' => '2023-01-10 08:00:00'],
            ['id' => 2,  'book_id' => 2,  'author_id' => 1,  'created_at' => '2023-02-14 09:15:00', 'updated_at' => '2023-02-14 09:15:00'],
            ['id' => 3,  'book_id' => 3,  'author_id' => 2,  'created_at' => '2023-03-05 10:30:00', 'updated_at' => '2023-03-05 10:30:00'],
            ['id' => 4,  'book_id' => 4,  'author_id' => 2,  'created_at' => '2023-04-20 11:00:00', 'updated_at' => '2023-04-20 11:00:00'],
            ['id' => 5,  'book_id' => 5,  'author_id' => 3,  'created_at' => '2023-05-18 12:45:00', 'updated_at' => '2023-05-18 12:45:00'],
            ['id' => 6,  'book_id' => 6,  'author_id' => 3,  'created_at' => '2023-06-22 08:30:00', 'updated_at' => '2023-06-22 08:30:00'],
            ['id' => 7,  'book_id' => 7,  'author_id' => 4,  'created_at' => '2023-07-11 09:00:00', 'updated_at' => '2023-07-11 09:00:00'],
            ['id' => 8,  'book_id' => 8,  'author_id' => 4,  'created_at' => '2023-08-03 10:15:00', 'updated_at' => '2023-08-03 10:15:00'],
            ['id' => 9,  'book_id' => 9,  'author_id' => 5,  'created_at' => '2023-09-17 11:30:00', 'updated_at' => '2023-09-17 11:30:00'],
            ['id' => 10, 'book_id' => 10, 'author_id' => 5,  'created_at' => '2023-10-09 13:00:00', 'updated_at' => '2023-10-09 13:00:00'],
            ['id' => 11, 'book_id' => 11, 'author_id' => 6,  'created_at' => '2023-11-01 08:45:00', 'updated_at' => '2023-11-01 08:45:00'],
            ['id' => 12, 'book_id' => 12, 'author_id' => 6,  'created_at' => '2023-11-25 09:30:00', 'updated_at' => '2023-11-25 09:30:00'],
            ['id' => 13, 'book_id' => 13, 'author_id' => 7,  'created_at' => '2023-12-12 10:00:00', 'updated_at' => '2023-12-12 10:00:00'],
            ['id' => 14, 'book_id' => 14, 'author_id' => 7,  'created_at' => '2024-01-08 11:15:00', 'updated_at' => '2024-01-08 11:15:00'],
            ['id' => 15, 'book_id' => 15, 'author_id' => 8,  'created_at' => '2024-02-14 12:00:00', 'updated_at' => '2024-02-14 12:00:00'],
            ['id' => 16, 'book_id' => 16, 'author_id' => 8,  'created_at' => '2024-03-20 08:00:00', 'updated_at' => '2024-03-20 08:00:00'],
            ['id' => 17, 'book_id' => 17, 'author_id' => 9,  'created_at' => '2024-04-05 09:45:00', 'updated_at' => '2024-04-05 09:45:00'],
            ['id' => 18, 'book_id' => 18, 'author_id' => 9,  'created_at' => '2024-05-19 10:30:00', 'updated_at' => '2024-05-19 10:30:00'],
            ['id' => 19, 'book_id' => 19, 'author_id' => 10, 'created_at' => '2024-06-30 11:00:00', 'updated_at' => '2024-06-30 11:00:00'],
            ['id' => 20, 'book_id' => 20, 'author_id' => 10, 'created_at' => '2024-07-22 13:15:00', 'updated_at' => '2024-07-22 13:15:00'],
        ];

        foreach ($authorBooks as &$row) {
            $row['uuid'] = Str::uuid()->toString();
        }

        DB::table('author_books')->insert($authorBooks);
    }
}
