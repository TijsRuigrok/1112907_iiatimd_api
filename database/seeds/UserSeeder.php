<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'tijs@gmail.com',
            'password' => Hash::make('password'),
            'updated_at' => '2016-01-01 00:00:00'
        ]);
    }
}
