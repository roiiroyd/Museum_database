<?php

use Illuminate\Database\Seeder;

class ParticipationTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('participants')->insert([
            'regisNo' => '1',
            'name' => 'roy',
            'lastname' => 'bura',
            'email' =>'roybura',
            'password' => '1234'
        ]);
    }
}
