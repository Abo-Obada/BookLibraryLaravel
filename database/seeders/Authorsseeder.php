<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class Authorsseeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['id' => 1,  'author_name' => 'نجيب الأنصاري', 'nationality' => 'مصري',    'birth_date' => '1955-03-12', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 2,  'author_name' => 'ليلى الزهراني', 'nationality' => 'سعودية',   'birth_date' => '1970-07-24', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 3,  'author_name' => 'كمال فاروق',    'nationality' => 'جزائري',   'birth_date' => '1963-11-05', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 4,  'author_name' => 'سارة الخوري',  'nationality' => 'لبنانية',   'birth_date' => '1980-02-18', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 5,  'author_name' => 'يوسف الرشيد',  'nationality' => 'كويتي',     'birth_date' => '1948-09-30', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 6,  'author_name' => 'منى الطاهر',   'nationality' => 'تونسية',    'birth_date' => '1975-05-14', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 7,  'author_name' => 'حسن الجبوري',  'nationality' => 'عراقي',     'birth_date' => '1958-08-22', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 8,  'author_name' => 'رنا المصري',   'nationality' => 'سورية',     'birth_date' => '1985-12-01', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 9,  'author_name' => 'طارق البشير',  'nationality' => 'سوداني',    'birth_date' => '1967-04-10', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
            ['id' => 10, 'author_name' => 'فاطمة العمري', 'nationality' => 'مغربية',    'birth_date' => '1990-06-27', 'created_at' => '2022-01-01 00:00:00', 'updated_at' => '2022-01-01 00:00:00'],
        ];

        foreach ($authors as &$author) {
            $author['uuid'] = Str::uuid()->toString();
        }

        DB::table('authors')->insert($authors);
    }
}
