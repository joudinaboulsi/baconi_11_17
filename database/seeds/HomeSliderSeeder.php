<?php

use Illuminate\Database\Seeder;

class HomeSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_sliders')->delete();
        
        \DB::table('home_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'background' => '1700131816aerial-view-container-cargo-ship-sea.jpg',
                'title' => 'Baconi Group Holding',
                'subtitle'=>'to lead the market',
                'link'=>'About us',
                'url'=>'about-us',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                
                'background' => '1700131836shutterstock_2037311816.jpg',
                'title' => 'Specialized in various sectors',
                'subtitle'=>'Including marine services, logistics, oil and gas consultancy',
                'link'=>'Contact us',
                'url'=>'contact-us',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (

                'id' => 3,
                'background' => '1700131854shutterstock_55445227.jpg',
                'title' => 'Global reach and expert advice',
                'subtitle'=>Null,
                'link'=>'Services',
                'url'=>'services',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
          
        ));
    }
}
