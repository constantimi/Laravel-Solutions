<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
            'name' => 'seeder',
            'email' => 'seeder@gmail.com',
            'password' => Hash::make('password'),
            'profile_image' => ''
            ],
            [
                'name' => 'tester',
                'email' => 'tester@gmail.com',
                'password' => Hash::make('password'),
                'profile_image' => ''
            ]
        ]);
    }
}
