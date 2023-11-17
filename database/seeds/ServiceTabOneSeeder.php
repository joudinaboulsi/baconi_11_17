<?php

use Illuminate\Database\Seeder;

class ServiceTabOneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('service_tab_ones')->delete();
        
        \DB::table('service_tab_ones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1700131273s1.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Liner Representation',
                'text1'=>'Container Line principals',
                'text2'=>'Ro/Ro, Conventional and LNG principals',
                'text3'=>'Cruise Line principles',
                'icon'=>'1700131273favicon_sea.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            1 => 
            array (
                'id' => 2,
                'image' => '1700131338s2.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Husbandry Agencies',
                'text1'=>'Full vessel husbandry operations',
                'text2'=>'Charterers & owners protective services',
                'text3'=>'Supply chain solutions & ship chandelling services',
                'icon'=>'1700131338favicon_ultra.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            2 => 
            array (
                'id' => 3,
                'image' => '1700131582s3.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Land Freight',
                'text1'=>'Domestic and Regional transportation of both FTL and LTL cargo',
                'text2'=>'Refrigerated and perishable food stuff',
                'text3'=>'Heavy equipment and oversized cargo',
                'icon'=>'1700131490favicon_ultra.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '1700131594s4.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Air Freight',
                'text1'=>'Normal, Hazardous and Perishable goods',
                'text2'=>'Full packaging and palletizing individual and consolidated shipments',
                'text3'=>'Full and part charter planes depending on requirements',
                'icon'=>'1700131504favicon_ultra.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            4 => 
            array (
                'id' => 5,
                'image' => '1700131610s5.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Ocean Freight',
                'text1'=>'FCL & LCL and special equipment containers',
                'text2'=>'Hazardous cargo with certified operations',
                'text3'=>'Full packaging and palletizing of consolidated cargoes',
                'icon'=>'1700131521favicon_ultra.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            5 => 
            array (
                'id' => 6,
                'image' => '1700131625s6.jpg',
                'alt_image' => 'Alt Image',
                'title1'=>'Groupage',
                'text1'=>'Consolidation services of Air and Sea',
                'text2'=>'Break bulk, general and Roll on - Roll Off cargo',
                'text3'=>'NVOCC – Non Vessel Operating Common Carrier',
                'icon'=>'1700131537favicon_ultra.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
