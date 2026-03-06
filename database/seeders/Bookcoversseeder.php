<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Bookcoversseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $covers = [
            ['id' => 1,  'created_at' => '2023-01-10 08:00:00', 'updated_at' => '2023-01-10 08:00:00', 'book_name' => 'في أعماق الصمت',         'book_image' => 'covers/01_fi_aamaaq_alsamat.jpg',         'book_rate' => 4.7, 'book_description' => 'رواية فلسفية تستكشف معنى الوجود والصمت الداخلي في عالم مليء بالضجيج، تأخذ القارئ في رحلة روحية عميقة.',                                         'book_id' => 1,  'book_page_number' => 210],
            ['id' => 2,  'created_at' => '2023-02-14 09:15:00', 'updated_at' => '2023-02-14 09:15:00', 'book_name' => 'أجنحة من رماد',           'book_image' => 'covers/02_ajniha_min_ramad.jpg',           'book_rate' => 4.5, 'book_description' => 'قصة امرأة تنهض من بين أنقاض حياتها المحطمة لتبني مستقبلاً جديداً، في سرد شعري مؤثر.',                                                          'book_id' => 2,  'book_page_number' => 185],
            ['id' => 3,  'created_at' => '2023-03-05 10:30:00', 'updated_at' => '2023-03-05 10:30:00', 'book_name' => 'خريف الروح',              'book_image' => 'covers/03_khareef_alrooh.jpg',             'book_rate' => 4.3, 'book_description' => 'رواية تصوّر مرحلة الشك والتحول في حياة رجل في منتصف العمر يعيد اكتشاف نفسه من جديد.',                                                         'book_id' => 3,  'book_page_number' => 240],
            ['id' => 4,  'created_at' => '2023-04-20 11:00:00', 'updated_at' => '2023-04-20 11:00:00', 'book_name' => 'بحر بلا شطآن',            'book_image' => 'covers/04_bahr_bila_shatan.jpg',           'book_rate' => 4.8, 'book_description' => 'ملحمة بحرية رمزية عن البحث عن الحقيقة في عالم لا نهاية له، مكتوبة بأسلوب أدبي رفيع.',                                                          'book_id' => 4,  'book_page_number' => 320],
            ['id' => 5,  'created_at' => '2023-05-18 12:45:00', 'updated_at' => '2023-05-18 12:45:00', 'book_name' => 'ظلال المدينة',            'book_image' => 'covers/05_dilal_almadeena.jpg',            'book_rate' => 4.2, 'book_description' => 'رواية اجتماعية ترصد حياة ثلاثة أصدقاء في مدينة عربية كبرى وكيف تتشكّل مصائرهم.',                                                             'book_id' => 5,  'book_page_number' => 195],
            ['id' => 6,  'created_at' => '2023-06-22 08:30:00', 'updated_at' => '2023-06-22 08:30:00', 'book_name' => 'ليالي الياسمين',          'book_image' => 'covers/06_layali_alyasmin.jpg',            'book_rate' => 4.6, 'book_description' => 'رواية رومانسية تاريخية تدور في دمشق القديمة وتحكي قصة حب مستحيل بين عائلتين متنافستين.',                                                     'book_id' => 6,  'book_page_number' => 270],
            ['id' => 7,  'created_at' => '2023-07-11 09:00:00', 'updated_at' => '2023-07-11 09:00:00', 'book_name' => 'الجسر المكسور',           'book_image' => 'covers/07_aljusr_almaksoor.jpg',           'book_rate' => 4.4, 'book_description' => 'رواية سياسية تحكي عن مجتمع منقسم وشاب يحاول بناء جسور التواصل بين طرفين متعاديين.',                                                         'book_id' => 7,  'book_page_number' => 230],
            ['id' => 8,  'created_at' => '2023-08-03 10:15:00', 'updated_at' => '2023-08-03 10:15:00', 'book_name' => 'نافذة على النسيان',       'book_image' => 'covers/08_nafidha_ala_alnisyan.jpg',       'book_rate' => 4.1, 'book_description' => 'رواية نفسية عن امرأة تفقد ذاكرتها تدريجياً وتحاول استعادة شظايا هويتها المتناثرة.',                                                          'book_id' => 8,  'book_page_number' => 200],
            ['id' => 9,  'created_at' => '2023-09-17 11:30:00', 'updated_at' => '2023-09-17 11:30:00', 'book_name' => 'حكاية الرمال',            'book_image' => 'covers/09_hikayat_alrimal.jpg',            'book_rate' => 4.9, 'book_description' => 'رواية تاريخية ملحمية تجري أحداثها في الصحراء العربية وتتتبع قبيلة عبر ثلاثة أجيال.',                                                          'book_id' => 9,  'book_page_number' => 410],
            ['id' => 10, 'created_at' => '2023-10-09 13:00:00', 'updated_at' => '2023-10-09 13:00:00', 'book_name' => 'أبواب مغلقة',             'book_image' => 'covers/10_abwab_mughlaka.jpg',             'book_rate' => 4.0, 'book_description' => 'رواية بوليسية مشوقة تدور في فندق قديم مغلق وسط عاصفة ثلجية وجريمة غامضة.',                                                                'book_id' => 10, 'book_page_number' => 175],
            ['id' => 11, 'created_at' => '2023-11-01 08:45:00', 'updated_at' => '2023-11-01 08:45:00', 'book_name' => 'الطريق إلى البيت',        'book_image' => 'covers/11_altariq_ila_albayt.jpg',         'book_rate' => 4.5, 'book_description' => 'رواية عاطفية تروي رحلة لاجئ عبر قارات متعددة بحثاً عن معنى الوطن والانتماء.',                                                             'book_id' => 11, 'book_page_number' => 260],
            ['id' => 12, 'created_at' => '2023-11-25 09:30:00', 'updated_at' => '2023-11-25 09:30:00', 'book_name' => 'قصيدة الوجود',            'book_image' => 'covers/12_qaseedat_alwujood.jpg',          'book_rate' => 4.7, 'book_description' => 'ديوان شعري فلسفي يتأمل في الكون والزمن والموت والحياة بلغة شعرية متدفقة.',                                                                'book_id' => 12, 'book_page_number' => 150],
            ['id' => 13, 'created_at' => '2023-12-12 10:00:00', 'updated_at' => '2023-12-12 10:00:00', 'book_name' => 'أسرار القاهرة',           'book_image' => 'covers/13_asrar_alqahira.jpg',             'book_rate' => 4.3, 'book_description' => 'رواية تاريخية تستكشف الطبقات الخفية لمدينة القاهرة من العصر الفاطمي حتى الحاضر.',                                                           'book_id' => 13, 'book_page_number' => 340],
            ['id' => 14, 'created_at' => '2024-01-08 11:15:00', 'updated_at' => '2024-01-08 11:15:00', 'book_name' => 'صرخة في الفراغ',          'book_image' => 'covers/14_sarkhah_fi_alfaragh.jpg',        'book_rate' => 4.2, 'book_description' => 'رواية وجودية تتناول أزمة المثقف العربي في مواجهة عالم متغير بسرعة مذهلة.',                                                               'book_id' => 14, 'book_page_number' => 215],
            ['id' => 15, 'created_at' => '2024-02-14 12:00:00', 'updated_at' => '2024-02-14 12:00:00', 'book_name' => 'حديقة الذكريات',          'book_image' => 'covers/15_hadeeqat_aldhikrayat.jpg',       'book_rate' => 4.6, 'book_description' => 'رواية سحرية واقعية تدور حول حديقة قديمة تحتفظ بذكريات كل من مشى فيها.',                                                                  'book_id' => 15, 'book_page_number' => 280],
            ['id' => 16, 'created_at' => '2024-03-20 08:00:00', 'updated_at' => '2024-03-20 08:00:00', 'book_name' => 'ما وراء الأفق',           'book_image' => 'covers/16_ma_wara_alofuq.jpg',             'book_rate' => 4.8, 'book_description' => 'رواية خيال علمي عربية تستشرف مستقبل البشرية بعد مئة عام من التطور التكنولوجي.',                                                            'book_id' => 16, 'book_page_number' => 360],
            ['id' => 17, 'created_at' => '2024-04-05 09:45:00', 'updated_at' => '2024-04-05 09:45:00', 'book_name' => 'رحلة الدراويش',           'book_image' => 'covers/17_rihla_aldaraweesh.jpg',          'book_rate' => 4.4, 'book_description' => 'رواية روحانية تصاحب مجموعة من الدراويش في رحلتهم الصوفية عبر الأناضول.',                                                                 'book_id' => 17, 'book_page_number' => 245],
            ['id' => 18, 'created_at' => '2024-05-19 10:30:00', 'updated_at' => '2024-05-19 10:30:00', 'book_name' => 'الوجه الآخر للقمر',       'book_image' => 'covers/18_alwajh_alakhar_lilqamar.jpg',    'book_rate' => 4.5, 'book_description' => 'رواية نفسية تستكشف الجانب المظلم في شخصية طبيب نفسي يكتشف أنه يشاطر مرضاه أمراضهم.',                                                   'book_id' => 18, 'book_page_number' => 225],
            ['id' => 19, 'created_at' => '2024-06-30 11:00:00', 'updated_at' => '2024-06-30 11:00:00', 'book_name' => 'أغنية الأرض',             'book_image' => 'covers/19_ughniyat_alarth.jpg',            'book_rate' => 4.9, 'book_description' => 'رواية بيئية شعرية تحكي عن قرية جبلية تواجه خطر الاختفاء بسبب التغيرات المناخية.',                                                         'book_id' => 19, 'book_page_number' => 300],
            ['id' => 20, 'created_at' => '2024-07-22 13:15:00', 'updated_at' => '2024-07-22 13:15:00', 'book_name' => 'الكتاب الأبيض',           'book_image' => 'covers/20_alkitab_alabyad.jpg',            'book_rate' => 4.6, 'book_description' => 'رواية تجريبية تُروى بأسلوب فريد حيث الصفحات البيضاء تحمل ثقل ما لم يُقَل.',                                                               'book_id' => 20, 'book_page_number' => 190],
        ];

        foreach ($covers as &$cover) {
            $cover['uuid'] = Str::uuid()->toString();
        }

        DB::table('book_covers')->insert($covers);
    }
}
