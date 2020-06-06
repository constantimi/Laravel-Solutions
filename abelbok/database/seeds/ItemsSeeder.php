<?php

use Illuminate\Database\Seeder;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->latest()->first();

        DB::table('items')->insert([
            [
                'title' => 'Item One',
                'description' => 'description item one',
                'user_id' => $user->id,
                'cover_image' => ''
            ],
            [
                'title' => 'Item Two',
                'description' => 'description item two',
                'user_id' => $user->id,
                'cover_image' => ''
            ]
        ]);
    }
}
