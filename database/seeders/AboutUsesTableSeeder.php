<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutUsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('about_uses')->delete();
        
        \DB::table('about_uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'আঞ্চলিক পরিচালকের কার্যালয়,কারিগরি শিক্ষা অধিদপ্তর,চট্টগ্রাম বিভাগ, কুমিল্লা',
                'image' => '905548211.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-06-05 07:28:56',
            ),
        ));
        
        
    }
}