<?php

use Illuminate\Database\Seeder;

class ExibitionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exibition')->insert([
            'exibitionID' => '1',
            'name' => 'SHONE PUIPIA',
            'startDate' => '2018-12-01',
            'endDate' =>'2018-12-05',
            'numberOfAttend' => '100'
        ]);

        DB::table('exibition')->insert([
            'exibitionID' => '2',
            'name' => 'THE POETIC LANGUAGE OF FLOWERS',
            'startDate' => '2018-11-01',
            'endDate' =>'2018-12-01',
            'numberOfAttend' => '200'
        ]);
    }
}
