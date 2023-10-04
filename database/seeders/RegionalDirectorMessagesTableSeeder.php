<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RegionalDirectorMessagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('regional_director_messages')->delete();
        
        \DB::table('regional_director_messages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'শেখ জাহিদুল ইসলাম',
                'title' => 'আঞ্চলিক পরিচালক',
                'description' => 'Message From REGIONAL DIRECTOR শেখ জাহিদুল ইসলাম',
                'image' => '1099108376.jpg',
                'created_at' => NULL,
                'updated_at' => '2023-06-05 05:25:31',
            ),
        ));
        
        
    }
}