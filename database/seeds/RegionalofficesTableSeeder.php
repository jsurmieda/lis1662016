<?php

use Illuminate\Database\Seeder;

class RegionalofficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('regionaloffices')->insert([
            'region_name' =>'Ilocos Region',
        ]);
         DB::table('regionaloffices')->insert([
            'region_name' =>'Cordillera Administrative Region',
        ]);
         
    }
}
