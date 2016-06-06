<?php

use Illuminate\Database\Seeder;

class OriginofficesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('originoffices')->insert([
	      	 'csc_name' =>'Ilocos Office 1',
            'regionalOffice_id' =>1,
        ]);
          DB::table('originoffices')->insert([
	      	 'csc_name' =>'Ilocos Office 2',
            'regionalOffice_id' =>1,
        ]);
           DB::table('originoffices')->insert([
	      	 'csc_name' =>'Cordillera Administrative Region Office 1',
            'regionalOffice_id' =>2,
        ]);
            DB::table('originoffices')->insert([
	      	 'csc_name' =>'Cordillera Administrative Region Office 2',
            'regionalOffice_id' =>2,
        ]);
    }
}
