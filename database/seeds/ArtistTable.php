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
        
        DB::table('artists')->insert([
            'artistID' => '2',
            'name' => 'Paul Landowski',
            'dateBorn' => '1875-6-1',
            'dateDied' =>'1962-3-31',
            'countryOfOrigin' => 'Paris',
            'epoch' => '',
            'mainStyle' => 'living statue',
            'description' => ''
            ]);

        DB::table('artists')->insert([
            'artistID' => '3',
            'name' => 'Leonardo da Vinci',
            'dateBorn' => '1452-4-15',
            'dateDied' =>'1519-5-2',
            'countryOfOrigin' => 'Italy',
            'epoch' => '',
            'mainStyle' => 'Italian Renaissance',
            'description' => ''
            ]);

        // DB::table('artists')->insert([
        //     'artistID' => '4',
        //     'name' => 'Ram v. Sutar',
        //     'dateBorn' => '1925-2-19',
        //     'dateDied' =>'',
        //     'countryOfOrigin' => 'India',
        //     'epoch' => '',
        //     'mainStyle' => 'Religion statue',
        //     'description' => 'null'
        // ]);

        DB::table('artists')->insert([
            'artistID' => '5',
            'name' => 'Michelangelo',
            'dateBorn' => '1475-5-14',
            'dateDied' =>'1564-2-18',
            'countryOfOrigin' => 'Italy',
            'epoch' => '',
            'mainStyle' => 'Sculpture, painting, architecture, and poetry',
            'description' => 'null'
        ]);

        



    }
}
