<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ContactUsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact_uses')->delete();
        
        \DB::table('contact_uses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'description' => 'আঞ্চলিক পরিচালকের কার্যালয়
কারিগরি শিক্ষা অধিদপ্তর, চট্টগ্রাম বিভাগ,
কুমিল্লা ।
ফোন : ০২৩৩৪৪০৬০৪৪',
                'map' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3660.337569426143!2d91.173067!3d23.448285!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37547ee017556ae5%3A0xf90e6af5839f26f0!2sAncholik%20Parichaloker%20Karjaloy!5e0!3m2!1sen!2sbd!4v1685125341420!5m2!1sen!2sbd',
                'created_at' => NULL,
                'updated_at' => '2023-06-05 08:52:30',
            ),
        ));
        
        
    }
}