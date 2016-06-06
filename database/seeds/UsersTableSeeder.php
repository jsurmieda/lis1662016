<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('users')->insert([
            'name' => 'Rody Duterte',
           'email' => 'ncip@gmail.com',
           'password' => bcrypt('secret'),
            'remember_token' => str_random('haha'),
            'role_id' => 1,
            'originoffice_id' => 1,
          'created_at' => '2015-10-23 13:46:23',
         ]);
    }
}
