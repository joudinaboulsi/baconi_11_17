<?php

use Illuminate\Database\Seeder;

class AboutSliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('about_sliders')->delete();
        
        \DB::table('about_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '1700207188baconi website photos 2.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '1700207197baconi website photos 3.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '1700207215baconi website photos.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
