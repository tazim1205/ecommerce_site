<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TradeInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trade_infos')->delete();
        
        \DB::table('trade_infos')->insert(array (
            0 => 
            array (
                'created_at' => '2023-06-11 08:51:28',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'General Electronics',
                'updated_at' => '2023-06-11 08:51:28',
            ),
            1 => 
            array (
                'created_at' => '2023-06-11 08:51:50',
                'deleted_at' => NULL,
                'id' => 2,
                'name' => 'Building Maintenance',
                'updated_at' => '2023-06-11 08:51:50',
            ),
            2 => 
            array (
                'created_at' => '2023-06-11 08:52:01',
                'deleted_at' => NULL,
                'id' => 3,
                'name' => 'Computer',
                'updated_at' => '2023-06-13 07:39:55',
            ),
            3 => 
            array (
                'created_at' => '2023-06-11 08:52:25',
                'deleted_at' => NULL,
                'id' => 4,
                'name' => 'Dress Making',
                'updated_at' => '2023-06-11 08:52:25',
            ),
            4 => 
            array (
                'created_at' => '2023-06-11 08:52:28',
                'deleted_at' => NULL,
                'id' => 5,
                'name' => 'General Electrical Works',
                'updated_at' => '2023-06-11 08:52:28',
            ),
            5 => 
            array (
                'created_at' => '2023-06-11 08:53:49',
                'deleted_at' => NULL,
                'id' => 6,
                'name' => 'Welding & Febrication',
                'updated_at' => '2023-06-11 08:53:49',
            ),
            6 => 
            array (
                'created_at' => '2023-06-11 08:53:56',
                'deleted_at' => NULL,
                'id' => 7,
                'name' => 'Computer',
                'updated_at' => '2023-06-15 10:57:44',
            ),
        ));
        
        
    }
}