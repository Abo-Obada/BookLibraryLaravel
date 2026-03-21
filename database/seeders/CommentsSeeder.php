<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comments = [
            [
                'comment' => 'هذا الكتاب رائع جداً، استمتعت بكل صفحة فيه وأنصح الجميع بقراءته.',
                'uuid'    => Str::uuid(),
                'rating'  => '5',
                'like'    => '120',
                'dislike' => '3',
                'edited'  => false,
                'user_id' => 1,
                'book_id' => 1,
            ],
            [
                'comment' => 'الكتاب جيد لكنه يحتاج إلى مزيد من التفاصيل في بعض الفصول.',
                'uuid'    => Str::uuid(),
                'rating'  => '3',
                'like'    => '45',
                'dislike' => '10',
                'edited'  => true,
                'user_id' => 2,
                'book_id' => 1,
            ],
            [
                'comment' => 'أسلوب الكاتب سلس ومشوق، جعلني أكمل الكتاب في يوم واحد.',
                'uuid'    => Str::uuid(),
                'rating'  => '5',
                'like'    => '98',
                'dislike' => '2',
                'edited'  => false,
                'user_id' => 3,
                'book_id' => 2,
            ],
            [
                'comment' => 'لم يعجبني الكتاب كثيراً، الحبكة كانت متوقعة ومملة.',
                'uuid'    => Str::uuid(),
                'rating'  => '2',
                'like'    => '15',
                'dislike' => '30',
                'edited'  => false,
                'user_id' => 4,
                'book_id' => 2,
            ],
            [
                'comment' => 'من أفضل الكتب التي قرأتها هذا العام، أوصي به بشدة.',
                'uuid'    => Str::uuid(),
                'rating'  => '5',
                'like'    => '200',
                'dislike' => '5',
                'edited'  => true,
                'user_id' => 5,
                'book_id' => 3,
            ],
            [
                'comment' => 'الكتاب متوسط المستوى، يصلح للقراءة في أوقات الفراغ.',
                'uuid'    => Str::uuid(),
                'rating'  => '3',
                'like'    => '60',
                'dislike' => '8',
                'edited'  => false,
                'user_id' => 1,
                'book_id' => 3,
            ],
            [
                'comment' => 'معلومات قيّمة ومفيدة، غيّرت نظرتي للحياة بشكل كبير.',
                'uuid'    => Str::uuid(),
                'rating'  => '4',
                'like'    => '175',
                'dislike' => '4',
                'edited'  => false,
                'user_id' => 2,
                'book_id' => 4,
            ],
            [
                'comment' => 'الترجمة كانت ضعيفة بعض الشيء لكن المحتوى الأصلي ممتاز.',
                'uuid'    => Str::uuid(),
                'rating'  => '4',
                'like'    => '88',
                'dislike' => '12',
                'edited'  => true,
                'user_id' => 3,
                'book_id' => 4,
            ],
        ];
                DB::table('comments')->insert($comments);
    }
}
