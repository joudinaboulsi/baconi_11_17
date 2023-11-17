<?php

use Illuminate\Database\Seeder;

class PrinciplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('principle_sliders')->delete();
        
        \DB::table('principle_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '17002076771.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '17002076882.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '17002077003 (1).png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '17002077134.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '17002077345.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            5 => 
            array (
                'id' => 6,
                'image' => '17002077497.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => '17002077598.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => '170020777112.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            8 => 
            array (
                'id' => 9,
                
                'image' => '170020778213.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            9 => 
            array (
                'id' => 10,
                'image' => '170020779714.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         

            10 => 
            array (
                'id' => 11,
                'image' => '170020781215.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            11=> 
            array (
                'id' => 12,
                
                'image' => '170020782316.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            12 => 
            array (
                'id' => 13,
                'image' => '170020783717.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            13=> 
            array (
                'id' => 14,
                'image' => '170020784918.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            14=> 
            array (
                'id' => 15,
                'image' => '170020786419 (1).png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
