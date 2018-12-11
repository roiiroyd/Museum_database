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
        //1paint
        //2sculpture
        //3statue
        //4other
        DB::table('art_object')->insert([
            'artID' => '1',
            'type' => '2', //sculpture
            'artistID' => '1',
            'title' =>'Family Group',
            'year' => '1840',
            'paintType' => 'oil',
            'material' => 'canvas',
            'height'=> '',
            'weight'=> '',
            'style'=> 'Figure',
            'exhibitionID'=> '0',
           'description'=> ''
        ]);

        DB::table('art_object')->insert([
            'artID' => '2',
            'type' => '2', //sculpture
            'artistID' => '1',
            'title' =>'The Kiss',
            'year' => '1882',
            'paintType' => 'null',
            'material' => 'Marble',
            'height'=> '182.9 ',
            'weight'=> '',
            'style'=> 'High Relief',
            'exhibitionID'=> '0',
            'description'=> ''
            ]);

        DB::table('art_object')->insert([
            'artID' => '3',
            'type' => '3', //statue
            'artistID' => '1',
            'title' =>'the thinker',
            'year' => '1880',
            'paintType' => 'null',
            'material' => 'canvas',
            'height'=> '168',
            'weight'=> '',
            'style'=> 'living statue',
            'exhibitionID'=> '0',
            'description'=> '' ]);

        DB::table('art_object')->insert([
            'artID' => '4',
            'type' => '2', //sculpture
            'artistID' => '2',
            'title' =>'Christ the Redeemer',
            'year' => '1840',
            'paintType' => 'oil',
            'material' => 'Soapstone',
            'height'=> '380',
            'weight'=> '',
            'style'=> 'living statue',
            'exhibitionID'=> '0',
           'description'=> 'Constructed between 1922 and 1931'
        ]);

        DB::table('art_object')->insert([
            'artID' => '5',
            'type' => '1', //paint
            'artistID' => '3',
            'title' =>'The Virgin and Child with Saint Anne',
            'year' => '1503',
            'paintType' => 'oil',
            'material' => 'wood panel',
            'height'=> '',
            'weight'=> '',
            'style'=> 'Illustration',
            'exhibitionID'=> '0',
           'description'=> ' null'
               ]);

        // DB::table('art_object')->insert([
        //     'artID' => '6',
        //     'type' => '3', //statue
        //     'artistID' => '4',
        //     'title' =>'Statue of Unity',
        //     'year' => '2013',
        //     'paintType' => 'oil',
        //     'material' => 'steel framing',
        //     'height'=> '1820',
        //     'weight'=> 'null',
        //     'style'=> 'unity statue',
        //     'exhibitionID'=> '0',
        //    'description'=> 'null'
        //    ]);

        DB::table('art_object')->insert([
            'artID' => '7',
            'type' => '1', //paint
            'artistID' => '5',
            'title' =>'The Creation of Adam',
            'year' => '1508',
            'paintType' => 'oil',
            'material' => 'wall',
            'height'=> '',
            'weight'=> '',
            'style'=> 'Illustration',
            'exhibitionID'=> '0',
           'description'=> ''
        ]);

        DB::table('art_object')->insert([
            'artID' => '8',
            'type' => '1', //paint
            'artistID' => '3',
            'title' =>'Mona Lisa',
            'year' => '1503',
            'paintType' => 'oil',
            'material' => 'poplar panel',
            'height'=> '',
            'weight'=> '',
            'style'=> 'Potrait',
            'exhibitionID'=> '0',
           'description'=> '' 
           ]);



    }
}
