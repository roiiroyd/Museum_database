<?php

use Illuminate\Database\Seeder;

class ArtObjectTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('art_object')->insert([
            'artID' => '1',
            'type' => '2', //sculpture
            'artistID' => '1',
            'title' =>'Family Group',
            'year' => '1840',
            'paintType' => 'oil',
            'material' => 'canvas',
            'height'=> '0',
            'weight'=> '0',
            'style'=> 'Figure',
            'exibitionID'=> '0',
           'description'=> 'null'
        ]);
    }
}
