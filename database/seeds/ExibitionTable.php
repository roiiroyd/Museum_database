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

        DB::table('exibition')->insert([
            'exibitionID' => '3',
            'name' => 'THE COSMIC DANCE OF THE PAINTBRUSH',
            'startDate' => '2018-12-01',
            'endDate' =>'2018-12-11',
            'numberOfAttend' => '20'
        ]);

        DB::table('exibition')->insert([
            'exibitionID' => '4',
            'name' => 'PATANI SEMASA',
            'startDate' => '2018-11-21',
            'endDate' =>'2018-12-01',
            'numberOfAttend' => '40'
        ]);

        DB::table('exibition')->insert([
            'exibitionID' => '5',
            'name' => 'THE SERENITY OF MADNESS',
            'startDate' => '2018-11-20',
            'endDate' =>'2018-12-11',
            'numberOfAttend' => '10'
        ]);


    }
}
