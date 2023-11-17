<?php

use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('contacts')->delete();
        
        \DB::table('contacts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'background' => '17002322401700228814shutterstock_2037311816.jpg',
                'logo_contact' => '1700232240170022960316995265251695487950Untitled-2-01.png',
                'title_header' => 'CONTACT US',
                'subtitle_header' => 'PREMIUM LIFESTYLE BRAND',
                'title_contact' => 'How we can help you?',
                'subtitle_contact' => 'Fill out the form and we’ll be in touch soon!',
                'title_career' => 'How we can help you?',
                'subtitle_career' => 'We are always looking for talented and professional specialists with a passion for progress in the region. If you have expertise in one of the fields we operate in and want to be part of Baconi Group Holding.',
                'title_address' => 'Fill out the form and we’ll be in touch soon!',
                'subtitle_address' => 'Baconi offices round the world',
                'image_address' => '17002322401700228769shutterstock_1206527953.jpg',
                'icon_lb' => '17002322401700229237lebanon.png',
                'icon_jordan' => '17002322401700229331jordan.png',
                'icon_cyprus' => '17002322401700229331northern-cyprus.png',
                'title1'=>'Lebanon-Beirut',
                'title2'=>'Nicosia, Cyprus',
                'title3'=>'Aqaba, Jordan',
                'location1'=>Null,
                'location2'=>Null,
                'location3'=>Null,
                'phone1'=>'+9614 521 772',
                'phone2'=>'+9614 521 772',
                'phone3'=>'+9614 521 772',
                'email1'=>'info@baconigroup.com',
                'email2'=>'info@baconigroup.com',
                'email3'=>'info@baconigroup.com',
                'title_media'=>'At Baconi Group Holding, we care about your comments, questions, and ideas.',
                'title_section1'=>'At Baconi Group Holding, we care about your comments, questions, and ideas.',
                'title_tab1'=>'Get in touch',
                'title_tab2'=>'Career',


                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
