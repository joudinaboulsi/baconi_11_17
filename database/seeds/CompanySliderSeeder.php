<?php

use Illuminate\Database\Seeder;

class CompanySliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        \DB::table('slider_companies')->delete();
        
        \DB::table('slider_companies')->insert(array (
            0 => 
            array (
                'id' => 2,
                'image' => '1700206333Baconi March Content-11.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            1 => 
            array (
                'id' => 3,
                'image' => '1700206345Baconi March Content-12.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),

            2 => 
            array (
                'id' => 4,
                'image' => '1700206354Baconi March Content-13.png',
                'created_at' => NULL,
                'updated_at' => '2023-10-08 18:16:15',
            ),
         
        ));
    }
}
