<?php

use Illuminate\Database\Seeder;

class HomePageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_pages')->delete();
        
        \DB::table('home_pages')->insert(array (
            0 => 
            array (
                'id' => 1,
                'icon1' => NULL,
                'icon2' => NULL,
                'icon3' => NULL,
                'icon4' => NULL,
                'title1' => 'Who we are',
                'title2' => 'Principles',
                'title3' => 'Memberships',
                'title4' => 'CSR',
                'subtitle1' => NULL,
                'subtitle2' => NULL,
                'subtitle3' => NULL,
                'subtitle4' => NULL,

                'counter1' => '157+',
                'title1_count' => 'WORLDWIDE OFFICES',
                'subtitle1_count' => NULL,
                'image_count' => '1700132442Artboard 4 (1).png',
                'years' => '20',
                'counter2' => '205+',
                'title2_count' => 'HIGH SKILLED PEOPLE',
                'subtitle2_count' => NULL,
                'logo' => '1700132524Untitled-2-01.png',
                'subtitle_section1' => 'Our Services',
                'title_section1'=>'Consultancy',
                'image_section1'=>'1700132728b.png',
                'text_consultancy'=>'Contact Baconi Group',
                'text2_section1'=>'Provide details about your industry,business,and location to help Baconi Group better understand your needs',
                'text3_section1'=>'Provide details about your industry,business,and location to help Baconi Group better understand your needs',
                'text4_section1'=>'Discuss and agree upon a time frame with Baconi Group for the provision of the required consultancy services',
                'image1_service'=>'17002240161695487950Artboard 2.png',
                'image2_service'=>'17002240161695487950Artboard 1.png',
                'image3_service'=>'17002240161695487950Artboard 3.png',
                'title1_service'=>'Transportation and Logistics',
                'title2_service'=>'Protection & Indemnity',
                'title3_service'=>'Consultancy',
                'p1_service'=>'<p>Baconi Group Holding offers global transportation and logistics services, bridging the gap between merchants and carriers by improving communication and optimizing the work process to ensure cargo gets to the right destination safely and on time.</p>',
                'p2_service'=> NULL,
                'p3_service'=> NULL,
                'video'=>'1699525826video.webm',
                'title_video'=>'video',
                'subtitle_video'=>'video',
                'link_video'=>'video',
                'company1'=>'1700133002FINAL LOGOS BACONI-01.png',
                'company2'=>'1700133002FINAL LOGOS BACONI-02.png',
                'company3'=>'1700133002FINAL LOGOS BACONI-04.png',
                'company4'=>'17002131991695489066FINAL LOGOS BACONI-03.png',
                'alt_company1'=>'alt_company',
                'alt_company2'=>'alt_company',
                'alt_company3'=>'alt_company',
                'alt_company4'=>'alt_company',
                'title_year' => 'Years of expearience',
                'title_service'=>'Our Services',
                'title_blog'=>'Latest from our blog',
                'title_post'=>'Check our latest posts',
                'title_contact'=>'Get in Touch',
                'subtitle_contact'=>'ACHIEVE BETTER RESULTS WITH BACONI GROUP HOLDING',
             
               
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
               
        ));
    
    }
}
