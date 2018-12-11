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
            'name' => 'abc',
            'lastname' => 'zxc',
            'email' =>'1234@gmail.com',
            'password' => '1234'
        ]);

        DB::table('participants')->insert([
            'regisNo' => '2',
            'name' => 'hello',
            'lastname' => 'morning',
            'email' =>'morning@gmail.com',
            'password' => '1234'
        ]);

        DB::table('participants')->insert([
            'regisNo' => '3',
            'name' => 'monday',
            'lastname' => 'morning',
            'email' =>'morning@gmail.com',
            'password' => '1234'
        ]);
    }
}
