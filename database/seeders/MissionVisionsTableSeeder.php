<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MissionVisionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mission_visions')->delete();
        
        \DB::table('mission_visions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'মিশন:

জ্ঞান, দক্ষতা, যোগ্যতা ও নৈতিকতার উতকর্ষ সাধন, মেধা, মনন, ও সৃজনশীলতায় শ্রেষ্ঠত্ব অর্জন, দেশপ্রেম ও জবাবদিহিতায় উদ্দীপ্ত নেতৃত্ব বিনির্মাণ এবং মানবকল্যাণে একক ও সামাজিক অংশগ্রহণ নিশ্চিত করা ।

ভিশন:
কল্যাণময় সমাজ বিনির্মাণে সকল মানবিক মূল্যবোধে উজ্জীবিত কাঙ্খিত প্রজম্ম ও নেতৃত্ব তৈরী করা।',
                'created_at' => NULL,
                'updated_at' => '2023-06-05 07:32:04',
            ),
        ));
        
        
    }
}