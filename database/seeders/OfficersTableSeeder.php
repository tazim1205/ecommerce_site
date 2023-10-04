<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OfficersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('officers')->delete();
        
        \DB::table('officers')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Shaikh Jahidul Islam',
                'designation' => 'Regional Director',
                'mobile' => '01913475171',
                'phone_office' => '08176044',
                'phone_residence' => NULL,
                'email' => 'rdcomilla@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '1434396723.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-27 15:26:44',
                'updated_at' => '2023-05-27 15:26:44',
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Muhammad Sadequl Islam',
            'designation' => 'Regional Inspector(In-charge)',
                'mobile' => '01912761632',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'sadequl77@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '1964553171.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-27 17:33:10',
                'updated_at' => '2023-05-27 17:33:10',
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'Mobinul Islam Tazim',
                'designation' => 'Member',
                'mobile' => '01988444382',
                'phone_office' => 'Null',
                'phone_residence' => 'Null',
                'email' => 'info@sbit.com.bd',
                'present_address' => 'feni',
                'permanent_address' => 'feni',
                'image' => '631549337.jpg',
                'deleted_at' => '2023-06-05',
                'created_at' => '2023-05-28 05:38:54',
                'updated_at' => '2023-06-05 07:48:48',
            ),
        ));
        
        
    }
}