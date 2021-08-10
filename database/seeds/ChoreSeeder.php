<?php

use Illuminate\Database\Seeder;

class ChoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chores')->insert([
            'name' => 'Cook dinner',
            'points' => '200',
            'date' => '14 July 2021',
            'completed' => 0,
            'user_id' => 1,
        ]);
    }
}
