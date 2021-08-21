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
            'guid' => 'fe407b76-697e-44e3-8186-07aae7b64475',
            'name' => 'Cook dinner',
            'points' => '200',
            'date' => '14 July 2021',
            'completed' => 0,
            'user_id' => 1,
        ]);
        
    }
}
