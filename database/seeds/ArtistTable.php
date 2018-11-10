<?php

use Illuminate\Database\Seeder;

class ArtistTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            'artistID' => '1',
            'name' => 'Auguste Rodin',
            'dateBorn' => '1840-11-12',
            'dateDied' =>'1917-11-17',
            'countryOfOrigin' => 'French',
            'epoch' => '',
            'mainStyle' => 'Sculpture',
            'description' => ''
        ]);
    }
}
