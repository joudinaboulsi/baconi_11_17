<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('teams')->delete();
        
        \DB::table('teams')->insert(array (
            0 => 
            array (
                'id' => 1,
                
                'image' => '1700129172Baconi Group_ (45).jpg',
                'alt_image' => 'Senior Sales Executive at Ocean Network Express',
                'name'=> 'Chantal Mouawad',
                'position'=> 'Senior Sales Executive at Ocean Network Express',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            1 => 
            array (
                'id' => 2,
                
                'image' => '1700129208Baconi Group_ (26).jpg',
                'alt_image' => 'Baconi Partner',
                'name'=> 'Raed G.',
                'position'=> 'Baconi Partner',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
            2 => 
            array (
                'id' => 3,
                
                'image' => '1700129232Baconi Group_ (14).jpg',
                'alt_image' => 'Senior Manager Operation & Logistics',
                'name'=> 'Andre Bou Issa',
                'position'=> 'Senior Manager Operation & Logistics',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
