<?php

use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prizes')->insert([
            'guid' => '',
            'name' => 'Trip to disneyland',
            'points' => '200',
            'claimed' => 0,
            'user_id' => 1,
        ]);

        DB::table('prizes')->insert([
            'guid' => '',
            'name' => 'Test',
            'points' => '200',
            'claimed' => 1,
            'user_id' => 1,
        ]);
    }
}
