<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staffs')->delete();
        
        \DB::table('staffs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Website Information',
                'designation' => 'Al Rounder',
                'mobile' => '01800000000',
                'phone_office' => 'Null',
                'phone_residence' => 'Null',
                'email' => 'info@sbit.com.bd',
                'present_address' => 'Feni',
                'permanent_address' => 'Comilla',
                'image' => '1186980195.jpeg',
                'deleted_at' => '2023-05-28',
                'created_at' => '2023-05-27 18:11:59',
                'updated_at' => '2023-05-28 05:38:09',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Most. Morshida Akter',
                'designation' => 'Head Assistant',
                'mobile' => '01816723537',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'morshidah.a@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '1021300557.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-27 18:22:08',
                'updated_at' => '2023-05-27 18:22:08',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ireen Perveen',
                'designation' => 'UDA-Cum computer operator',
                'mobile' => '01552499371',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'ireentsc@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '1809398971.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-27 18:26:31',
                'updated_at' => '2023-06-05 08:33:31',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Jaton Kumar Chakma',
                'designation' => 'Driver',
                'mobile' => '01726449991',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'Jaton@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '63671391.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-27 18:30:03',
                'updated_at' => '2023-05-27 18:30:03',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Shilpi Ahmed',
                'designation' => 'Office Assistent',
                'mobile' => '01914634214',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'Shilpi@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '2026396287.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-28 05:20:37',
                'updated_at' => '2023-05-28 05:20:37',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Abdur Rahman',
                'designation' => 'L, D,A Cum-Typist',
                'mobile' => '01811845911',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'rahman2021@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '979267855.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-28 05:23:16',
                'updated_at' => '2023-05-28 05:23:16',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Moniruzzaman',
                'designation' => 'L,D,A Cum-Cashier',
                'mobile' => '01681282937',
                'phone_office' => NULL,
                'phone_residence' => NULL,
                'email' => 'mzaman2021@gmail.com',
                'present_address' => 'Cumilla',
                'permanent_address' => 'Cumilla',
                'image' => '1990676937.jpg',
                'deleted_at' => NULL,
                'created_at' => '2023-05-28 05:24:49',
                'updated_at' => '2023-05-28 05:24:49',
            ),
        ));
        
        
    }
}