<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('user')->insert([

        //         'name'=>'huzaifa',
        //         'email'=>'huzaifa@gmail.com',
        //         'password'=>Hash::make('password')

        // ]);
        DB::table('user')->insert([

            'name'=>'Paul',
            'email'=>'paul@gmail.com',
            'password'=>Hash::make('password')

    ]);
    }
}
