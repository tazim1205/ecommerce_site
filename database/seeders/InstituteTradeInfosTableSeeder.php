<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InstituteTradeInfosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('institute_trade_infos')->delete();
        
        \DB::table('institute_trade_infos')->insert(array (
            0 => 
            array (
                'created_at' => '2023-06-13 05:05:00',
                'deleted_at' => '2023-06-14',
                'id' => 20,
                'institute_id' => 5,
                'trade_id' => 1,
                'updated_at' => '2023-06-14 05:28:45',
            ),
            1 => 
            array (
                'created_at' => '2023-06-13 05:05:00',
                'deleted_at' => '2023-06-14',
                'id' => 21,
                'institute_id' => 5,
                'trade_id' => 2,
                'updated_at' => '2023-06-14 05:28:45',
            ),
            2 => 
            array (
                'created_at' => '2023-06-13 05:05:00',
                'deleted_at' => '2023-06-14',
                'id' => 22,
                'institute_id' => 5,
                'trade_id' => 5,
                'updated_at' => '2023-06-14 05:28:45',
            ),
            3 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 26,
                'institute_id' => 7,
                'trade_id' => 1,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            4 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 27,
                'institute_id' => 7,
                'trade_id' => 2,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            5 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 28,
                'institute_id' => 7,
                'trade_id' => 3,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            6 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 29,
                'institute_id' => 7,
                'trade_id' => 4,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            7 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 30,
                'institute_id' => 7,
                'trade_id' => 5,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            8 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 31,
                'institute_id' => 7,
                'trade_id' => 6,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            9 => 
            array (
                'created_at' => '2023-06-13 05:33:43',
                'deleted_at' => '2023-06-14',
                'id' => 32,
                'institute_id' => 7,
                'trade_id' => 7,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            10 => 
            array (
                'created_at' => '2023-06-14 05:28:45',
                'deleted_at' => '2023-06-14',
                'id' => 36,
                'institute_id' => 5,
                'trade_id' => 1,
                'updated_at' => '2023-06-14 05:37:56',
            ),
            11 => 
            array (
                'created_at' => '2023-06-14 05:29:08',
                'deleted_at' => NULL,
                'id' => 37,
                'institute_id' => 7,
                'trade_id' => 1,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            12 => 
            array (
                'created_at' => '2023-06-14 05:29:08',
                'deleted_at' => NULL,
                'id' => 38,
                'institute_id' => 7,
                'trade_id' => 2,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            13 => 
            array (
                'created_at' => '2023-06-14 05:29:08',
                'deleted_at' => NULL,
                'id' => 39,
                'institute_id' => 7,
                'trade_id' => 5,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            14 => 
            array (
                'created_at' => '2023-06-14 05:29:08',
                'deleted_at' => NULL,
                'id' => 40,
                'institute_id' => 7,
                'trade_id' => 6,
                'updated_at' => '2023-06-14 05:29:08',
            ),
            15 => 
            array (
                'created_at' => '2023-06-14 05:37:56',
                'deleted_at' => NULL,
                'id' => 41,
                'institute_id' => 5,
                'trade_id' => 3,
                'updated_at' => '2023-06-14 05:37:56',
            ),
            16 => 
            array (
                'created_at' => '2023-06-14 05:37:56',
                'deleted_at' => NULL,
                'id' => 42,
                'institute_id' => 5,
                'trade_id' => 6,
                'updated_at' => '2023-06-14 05:37:56',
            ),
            17 => 
            array (
                'created_at' => '2023-06-14 10:33:17',
                'deleted_at' => '2023-06-15',
                'id' => 43,
                'institute_id' => 9,
                'trade_id' => 1,
                'updated_at' => '2023-06-15 11:02:22',
            ),
            18 => 
            array (
                'created_at' => '2023-06-14 10:33:17',
                'deleted_at' => '2023-06-15',
                'id' => 44,
                'institute_id' => 9,
                'trade_id' => 6,
                'updated_at' => '2023-06-15 11:02:22',
            ),
        ));
        
        
    }
}