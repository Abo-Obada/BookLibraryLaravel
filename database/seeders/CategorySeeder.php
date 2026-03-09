<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $categories = [
            'رواية', 'تاريخ', 'علوم', 'فلسفة', 'دين',
            'سياسة', 'اقتصاد', 'أدب', 'شعر', 'تطوير ذات',
            'تكنولوجيا', 'طب', 'قانون', 'فن', 'رياضة',
        ];


foreach ($categories as $category) {
            DB::table('categories')->insert([
                'uuid'          => Str::uuid(),
                'category_name' => $category,
                'created_at'    => now(),
                'updated_at'    => now(),
            ]);
        }


    }
}
