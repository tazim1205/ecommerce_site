<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('employee_informations')->delete();
        
        \DB::table('employee_informations')->insert(array (
            0 => 
            array (
                'approved_post' => '12',
                'created_at' => '2023-06-14 11:06:29',
                'deleted_at' => NULL,
                'employee_class' => 'Teacher',
                'id' => 3,
                'in_service' => '11',
                'institute_id' => 5,
                'updated_at' => '2023-06-14 11:06:29',
                'vacant_post' => '00',
            ),
            1 => 
            array (
                'approved_post' => '3',
                'created_at' => '2023-06-14 11:06:56',
                'deleted_at' => NULL,
                'employee_class' => 'Lab/Shop Assistant',
                'id' => 4,
                'in_service' => '1',
                'institute_id' => 5,
                'updated_at' => '2023-06-14 11:06:56',
                'vacant_post' => '02',
            ),
            2 => 
            array (
                'approved_post' => '17',
                'created_at' => '2023-06-14 11:44:33',
                'deleted_at' => NULL,
                'employee_class' => '2nd',
                'id' => 5,
                'in_service' => '14',
                'institute_id' => 7,
                'updated_at' => '2023-06-14 11:44:33',
                'vacant_post' => '3',
            ),
            3 => 
            array (
                'approved_post' => '22',
                'created_at' => '2023-06-14 11:59:26',
                'deleted_at' => NULL,
                'employee_class' => '1st',
                'id' => 6,
                'in_service' => '12',
                'institute_id' => 7,
                'updated_at' => '2023-06-14 11:59:26',
                'vacant_post' => '22',
            ),
            4 => 
            array (
                'approved_post' => '255',
                'created_at' => '2023-06-14 12:00:10',
                'deleted_at' => NULL,
                'employee_class' => '4th',
                'id' => 7,
                'in_service' => '25',
                'institute_id' => 7,
                'updated_at' => '2023-06-15 05:54:42',
                'vacant_post' => '25',
            ),
        ));
        
        
    }
}