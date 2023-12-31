<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => NULL,
                'name' => 'Dashboard',
                'bn_name' => 'ড্যাশবোর্ড',
                'system_name' => 'Dashboard',
                'route_name' => 'dashboard',
                'icon' => 'uil-home-alt',
                'order_by' => 4,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-03-19 14:04:30',
                'updated_at' => '2023-04-03 10:38:48',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'parent_id' => NULL,
                'name' => 'User Management',
                'bn_name' => 'ইউজার ম্যানেজমেন্ট',
                'system_name' => 'User Management',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 5,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-03-19 18:06:39',
                'updated_at' => '2023-04-03 10:38:48',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'parent_id' => 2,
                'name' => 'User',
                'bn_name' => 'ইউজার',
                'system_name' => 'User',
                'route_name' => 'user.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-03-19 18:08:09',
                'updated_at' => '2023-03-31 18:10:57',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'parent_id' => NULL,
                'name' => 'Role Management',
                'bn_name' => 'রোল ম্যানেজমেন্ট',
                'system_name' => 'Role Management',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 6,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-03-19 18:14:26',
                'updated_at' => '2023-04-03 10:38:48',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'parent_id' => 4,
                'name' => 'Role',
                'bn_name' => 'রোল',
                'system_name' => 'Role',
                'route_name' => 'role.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-03-19 18:17:21',
                'updated_at' => '2023-03-31 18:11:32',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 25,
                'parent_id' => NULL,
                'name' => 'Menu Management',
                'bn_name' => 'মেন্যু ম্যানেজমেন্ট',
                'system_name' => 'Menu Management',
                'route_name' => '',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-04-03 10:38:48',
                'updated_at' => '2023-04-03 10:38:48',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 26,
                'parent_id' => 25,
                'name' => 'Menu',
                'bn_name' => 'মেন্যু',
                'system_name' => 'Menu',
                'route_name' => 'menu.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-04-03 10:39:32',
                'updated_at' => '2023-04-03 10:39:32',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 27,
                'parent_id' => NULL,
                'name' => 'Website Information',
                'bn_name' => 'ওয়েবসাইট এর তথ্য',
                'system_name' => 'Website Information',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 12,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:13:00',
                'updated_at' => '2023-06-05 05:09:58',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 28,
                'parent_id' => 27,
                'name' => 'Useful Link',
                'bn_name' => 'গুরুত্বপূর্ণ লিংক',
                'system_name' => 'Useful Link',
                'route_name' => 'useful-link.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:13:31',
                'updated_at' => '2023-05-25 12:13:31',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 29,
                'parent_id' => NULL,
                'name' => 'Website Content',
                'bn_name' => 'ওয়েবসাইটের বিষয়বস্তু',
                'system_name' => 'Website Content',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 13,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:15:05',
                'updated_at' => '2023-06-05 05:09:58',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 30,
                'parent_id' => 29,
                'name' => 'About Us',
                'bn_name' => 'আমাদের সম্পর্কে',
                'system_name' => 'About Us',
                'route_name' => 'about-us.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:16:01',
                'updated_at' => '2023-05-25 12:16:33',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 31,
                'parent_id' => 29,
                'name' => 'Mission & Vision',
                'bn_name' => 'লক্ষ ও উদ্দেশ্য',
                'system_name' => 'Mission & Vision',
                'route_name' => 'mission-vision.index',
                'icon' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:19:02',
                'updated_at' => '2023-05-25 12:19:02',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 32,
                'parent_id' => 29,
                'name' => 'Officers',
                'bn_name' => 'কর্মকর্তাবৃন্দ',
                'system_name' => 'Officers',
                'route_name' => 'officers.index',
                'icon' => NULL,
                'order_by' => 3,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:20:27',
                'updated_at' => '2023-05-25 12:20:28',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 33,
                'parent_id' => 29,
                'name' => 'Staffs',
                'bn_name' => 'স্টাফবৃন্দ',
                'system_name' => 'Staffs',
                'route_name' => 'staffs.index',
                'icon' => NULL,
                'order_by' => 4,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:21:32',
                'updated_at' => '2023-05-25 12:21:32',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 34,
                'parent_id' => 29,
                'name' => 'Contact Us',
                'bn_name' => 'যোগাযোগ',
                'system_name' => 'Contact Us',
                'route_name' => 'contact-us.index',
                'icon' => NULL,
                'order_by' => 5,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-25 12:22:47',
                'updated_at' => '2023-05-25 12:22:47',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 35,
                'parent_id' => NULL,
                'name' => 'Notice Board',
                'bn_name' => 'নোটিশ বোর্ড',
                'system_name' => 'Notice Board',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 11,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-28 07:23:54',
                'updated_at' => '2023-06-05 05:09:58',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 36,
                'parent_id' => 35,
                'name' => 'Notices',
                'bn_name' => 'নোটিশ সমূহ',
                'system_name' => 'Notices',
                'route_name' => 'notices.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-05-28 07:26:13',
                'updated_at' => '2023-05-28 07:26:13',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 37,
                'parent_id' => NULL,
                'name' => 'Attendance',
                'bn_name' => 'হাজিরা',
                'system_name' => 'Attendance',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 14,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-06-04 17:36:49',
                'updated_at' => '2023-06-05 05:09:58',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 38,
                'parent_id' => 37,
                'name' => 'Teacher Attendance',
                'bn_name' => 'শিক্ষক হাজিরা',
                'system_name' => 'Teacher Attendance',
                'route_name' => 'teacher-attendance.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-06-04 17:39:46',
                'updated_at' => '2023-06-04 17:39:47',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 39,
                'parent_id' => 37,
                'name' => 'Student Attendance',
                'bn_name' => 'শিক্ষার্থীদের হাজিরা',
                'system_name' => 'Student Attendance',
                'route_name' => 'student-attendance.index',
                'icon' => NULL,
                'order_by' => 2,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-06-04 17:41:58',
                'updated_at' => '2023-06-04 17:41:58',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 40,
                'parent_id' => NULL,
                'name' => 'R. DO Message',
                'bn_name' => 'আঞ্চলিক পরিচালকের বার্তা',
                'system_name' => 'Message From Regional Director',
                'route_name' => NULL,
                'icon' => NULL,
                'order_by' => 9,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-06-05 05:09:58',
                'updated_at' => '2023-06-05 05:13:20',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 41,
                'parent_id' => 40,
                'name' => 'Regional Director Message',
                'bn_name' => 'আঞ্চলিক পরিচালকের বার্তা',
                'system_name' => 'Regional Director Message',
                'route_name' => 'regional-director-message.index',
                'icon' => NULL,
                'order_by' => 1,
                'is_hidden' => 'No',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'deleted_by' => NULL,
                'created_at' => '2023-06-05 05:11:08',
                'updated_at' => '2023-06-05 05:11:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}