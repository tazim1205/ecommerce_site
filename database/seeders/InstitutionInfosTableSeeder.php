<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstitutionInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institution_infos')->delete();
        
        \DB::table('institution_infos')->insert(array (
            0 => 
            array (
                'created_at' => '2023-06-13 05:05:00',
                'deleted_at' => NULL,
                'email' => 'Alamdangagovthighschool@gmail.com',
                'id' => 5,
                'institution_category' => 'School, MPO',
                'institution_code' => '29005',
                'institution_head_name' => 'Md. Rabiul Islam Khan',
                'institution_name' => 'Alamdanga govt high school',
                'institution_type' => 'Boys',
                'mobile' => '01714948237',
                'trade_info_id' => NULL,
                'updated_at' => '2023-06-13 05:05:00',
            ),
            1 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => NULL,
                'email' => 'stijhenidah@gmail.com',
                'id' => 7,
                'institution_category' => 'MPO',
                'institution_code' => '30013',
                'institution_head_name' => 'Md. Abdullah Al Mamun',
                'institution_name' => 'Science & Technical Institute, Jhenidah',
                'institution_type' => 'Co-education',
                'mobile' => '01713635829',
                'trade_info_id' => NULL,
                'updated_at' => '2023-06-13 05:33:43',
            ),
            2 => 
            array (
                'created_at' => '2023-06-14 10:33:17',
                'deleted_at' => '2023-06-15',
                'email' => 'info@sbit.com.bd',
                'id' => 9,
                'institution_category' => 'MPO',
                'institution_code' => '4500',
                'institution_head_name' => 'Faruk Ahmaed',
                'institution_name' => 'Falahia',
                'institution_type' => 'Co-education',
                'mobile' => '01813910228',
                'trade_info_id' => NULL,
                'updated_at' => '2023-06-15 11:02:22',
            ),
        ));
        
        
    }
}