<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                DB::table('carousels')->insert([
            [
                'uuid' => Str::uuid(),
                'label' => 'لا تنسوا أهل غزة من صالح الدعاء',
                'image' => 'https://www.aljazeera.com/wp-content/uploads/2025/03/AP25061511413382-1741094092.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'label' => 'رمضان كريم. ينعاد علينا و عليكم بالصحة و العافية',
                'image' => 'https://jamalouki.net/uploads/imported_images/uploads/article/default_article/92ba20246f2f364e6907972eaac0150a.webp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'label' => 'صبراً يا أماه صبراً و إن فاض الدمعي لسال الزبد',
                'image' => 'https://www.aljazeera.net/wp-content/uploads/2020/09/BOOK-ARABIC-2.jpg?resize=1920%2C1280&quality=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'label' => 'جميع كتب أبن تيمية رحمه الله',
                'image' => 'https://qawl.com/wp-content/uploads/2025/02/WhatsApp-Image-2025-02-10-at-16.56.33-1024x576.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => Str::uuid(),
                'label' => 'فلنقرأ كل ما يصل إلى أيدينا بحذر وبعقل ناقد ، فما أكثر ما يدس لنا من سموم يراد بها هلاكنا',
                'image' => 'https://www.aljazeera.net/wp-content/uploads/2022/12/256-2.jpg?resize=730%2C410&quality=80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

    }
}
