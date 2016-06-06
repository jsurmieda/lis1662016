<?php

use Illuminate\Database\Seeder;

class CasetypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
          DB::table('casetypes')->insert([
            'casetypeName' =>'Civil and Political Rights',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Ancestral Domain Rights',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Militarization and Private Armed Groups',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Benefit Sharing',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'FPIC Isues',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Complaints on IP Leadership',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Complaints against NCIP Staff',
        ]);
           DB::table('casetypes')->insert([
            'casetypeName' =>'Complaints againts other Government Agencies',
        ]);

    }
}
