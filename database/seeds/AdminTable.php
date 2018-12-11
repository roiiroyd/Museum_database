<?php

use Illuminate\Database\Seeder;

class AdminTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            'adminID' => '1',
            'email' =>'admin',
            'password' => '1234',
            'status' => '0'
        ]);
    }
}
