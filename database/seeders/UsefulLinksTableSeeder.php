<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsefulLinksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('useful_links')->delete();
        
        \DB::table('useful_links')->insert(array (
            0 => 
            array (
                'id' => 4,
                'title' => 'শিক্ষাবোর্ডের ফলাফল-টেলিটক',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:33:38',
                'updated_at' => '2023-06-05 10:33:38',
            ),
            1 => 
            array (
                'id' => 5,
                'title' => 'শিক্ষাবোর্ডের ফলাফল-ওয়েব',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:34:00',
                'updated_at' => '2023-06-05 10:34:00',
            ),
            2 => 
            array (
                'id' => 6,
                'title' => 'জাতীয় বিশ্ববিদ্যালয়ের ফলাফল',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:34:12',
                'updated_at' => '2023-06-05 10:34:12',
            ),
            3 => 
            array (
                'id' => 7,
                'title' => 'প্রাইমারি সমাপনী পরীক্ষার ফলাফল',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:34:29',
                'updated_at' => '2023-06-05 10:34:29',
            ),
            4 => 
            array (
                'id' => 8,
                'title' => 'উন্মুক্ত বিশ্ববিদ্যালয়ের ফলাফল',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:34:53',
                'updated_at' => '2023-06-05 10:34:53',
            ),
            5 => 
            array (
                'id' => 9,
                'title' => 'এনটিআরসিএ পরীক্ষার ফলাফল',
                'url' => '#',
                'deleted_at' => NULL,
                'created_at' => '2023-06-05 10:35:14',
                'updated_at' => '2023-06-05 10:35:14',
            ),
        ));
        
        
    }
}