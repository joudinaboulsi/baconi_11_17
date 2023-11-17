<?php

use Illuminate\Database\Seeder;

class MembershipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('membership_sliders')->delete();
        
        \DB::table('membership_sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'image' => '17002078862.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '17002078953.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '17002079054.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '17002079155.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            4 => 
            array (
                'id' => 5,
                
                'image' => '17002079266.png',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            5 => 
            array (
                'id' => 6,
                'image' => '17002079367.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            6 => 
            array (
                'id' => 7,
                'image' => '17002079518.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            7 => 
            array (
                'id' => 8,
                'image' => '17002079609.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            8 => 
            array (
                'id' => 9,
                'image' => '1700207970mem1.jpg',
                'alt_image' => 'Alt Image',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
