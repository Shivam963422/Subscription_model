<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       DB::table('users')->insert([
       	 [
            'name' => 'admin',
            'email'=>'admin@gmail.com',
            'password'=>'$2y$10$tHZVa0swTlPZKc6It9Xite9cow/e2arMfwK8WFc0LcHHkFLj.DGyW',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
         ]
       ]);
    }
}
//end of file
// end of class
