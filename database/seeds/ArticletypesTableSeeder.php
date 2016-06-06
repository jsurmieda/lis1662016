<?php

use Illuminate\Database\Seeder;

class ArticletypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('articletypes')->insert([
            'id' => str_random(10),
            'typeName' => str_random(10).'romfel@gmail.com',
            'typeDescription' => bcrypt('123456789'),
        ]);
    }
}
