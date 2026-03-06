<?php



namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        public function run(): void
    {
        $books = [
            ['id' => 1,  'created_at' => '2023-01-10 08:00:00', 'updated_at' => '2023-01-10 08:00:00'],
            ['id' => 2,  'created_at' => '2023-02-14 09:15:00', 'updated_at' => '2023-02-14 09:15:00'],
            ['id' => 3,  'created_at' => '2023-03-05 10:30:00', 'updated_at' => '2023-03-05 10:30:00'],
            ['id' => 4,  'created_at' => '2023-04-20 11:00:00', 'updated_at' => '2023-04-20 11:00:00'],
            ['id' => 5,  'created_at' => '2023-05-18 12:45:00', 'updated_at' => '2023-05-18 12:45:00'],
            ['id' => 6,  'created_at' => '2023-06-22 08:30:00', 'updated_at' => '2023-06-22 08:30:00'],
            ['id' => 7,  'created_at' => '2023-07-11 09:00:00', 'updated_at' => '2023-07-11 09:00:00'],
            ['id' => 8,  'created_at' => '2023-08-03 10:15:00', 'updated_at' => '2023-08-03 10:15:00'],
            ['id' => 9,  'created_at' => '2023-09-17 11:30:00', 'updated_at' => '2023-09-17 11:30:00'],
            ['id' => 10, 'created_at' => '2023-10-09 13:00:00', 'updated_at' => '2023-10-09 13:00:00'],
            ['id' => 11, 'created_at' => '2023-11-01 08:45:00', 'updated_at' => '2023-11-01 08:45:00'],
            ['id' => 12, 'created_at' => '2023-11-25 09:30:00', 'updated_at' => '2023-11-25 09:30:00'],
            ['id' => 13, 'created_at' => '2023-12-12 10:00:00', 'updated_at' => '2023-12-12 10:00:00'],
            ['id' => 14, 'created_at' => '2024-01-08 11:15:00', 'updated_at' => '2024-01-08 11:15:00'],
            ['id' => 15, 'created_at' => '2024-02-14 12:00:00', 'updated_at' => '2024-02-14 12:00:00'],
            ['id' => 16, 'created_at' => '2024-03-20 08:00:00', 'updated_at' => '2024-03-20 08:00:00'],
            ['id' => 17, 'created_at' => '2024-04-05 09:45:00', 'updated_at' => '2024-04-05 09:45:00'],
            ['id' => 18, 'created_at' => '2024-05-19 10:30:00', 'updated_at' => '2024-05-19 10:30:00'],
            ['id' => 19, 'created_at' => '2024-06-30 11:00:00', 'updated_at' => '2024-06-30 11:00:00'],
            ['id' => 20, 'created_at' => '2024-07-22 13:15:00', 'updated_at' => '2024-07-22 13:15:00'],
        ];

        foreach ($books as &$book) {
            $book['uuid'] = Str::uuid()->toString();
        }

        DB::table('books')->insert($books);
   
    }
}
