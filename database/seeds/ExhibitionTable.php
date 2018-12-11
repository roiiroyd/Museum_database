<?php

use Illuminate\Database\Seeder;

class ExhibitionTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exhibition')->insert([
            'exhibitionID' => '1',
            'name' => 'SHONE PUIPIA',
            'startDate' => '2018-12-01',
            'endDate' =>'2018-12-05',
            'limitOfAttend' => '100',
            'numberOfAttend' => '0',
            'detail' => 'presents selected works of Shone Puipia, an emerging and promising Thai fashion designer. Shone graduated with a bachelor’s and master’s degree from the Royal Academy of Fine Arts in Antwerp, Belgium. On view are selected silhouettes and accessories from the three collections made during his studies: The Wild Bunch (2015-2016), She Walks on Marble Columns (2014-2015) and She Came by the Green Line Bus (2013-2014)'
        ]);

        DB::table('exhibition')->insert([
            'exhibitionID' => '2',
            'name' => 'THE POETIC LANGUAGE OF FLOWERS',
            'startDate' => '2018-11-01',
            'endDate' =>'2018-12-01',
            'limitOfAttend' => '200',
            'numberOfAttend' => '0',
            'detail' => 'The main purpose of the exhibition, The Poetic Language of Flowers, is to create a conglomeration of both the classic and modern poetic expressions of flower arrangements by utilizing available local seasonal flowers and containers. Moreover, the exhibition aims at discovering all possibilities of this art form from our living environment. Accompanied by the presented flower arrangements are also some of the chosen classical poems by famous Chinese poets lamenting on love and admiring flowers. '
        ]);

        DB::table('exhibition')->insert([
            'exhibitionID' => '3',
            'name' => 'THE COSMIC DANCE OF THE PAINTBRUSH',
            'startDate' => '2018-12-01',
            'endDate' =>'2018-12-11',
            'limitOfAttend' => '20',
            'numberOfAttend' => '0',
            'detail' => 'Lalan, a Chinese female artist who resided in Paris for almost fifty years, is known for her multitalented creative works as a composer, a dancer, a choreographer, a director, a writer , a poet, and a painter. She is the female painter of an era where Western influences fused with Eastern inspirations. Her works represent Chinese-ness and contemporaneity in the form of paintings.'
        ]);

        DB::table('exhibition')->insert([
            'exhibitionID' => '4',
            'name' => 'PATANI SEMASA',
            'startDate' => '2018-11-21',
            'endDate' =>'2018-12-01',
            'limitOfAttend' => '40',
            'numberOfAttend' => '0',
            'detail' => 'Alongside the exhibition, performances from the series, In the memories of LALAN, by Waewdao Sirosook and Ronnarong Khampa, with accompanying music composed by Lalan herself, will take place during the opening ceremony.'
        ]);

        DB::table('exhibition')->insert([
            'exhibitionID' => '5',
            'name' => 'THE SERENITY OF MADNESS',
            'startDate' => '2018-11-20',
            'endDate' =>'2018-12-11',
            'limitOfAttend' => '10',
            'numberOfAttend' => '0',
            'detail' => 'MAIIAM Contemporary Art Museum is proud to present the exhibition Mon Art du Style (or “my art of style”). The title, which is also a pun in Thai meaning “look at art, see style” sums up the key message of the exhibition. '
        ]);

        DB::table('exhibition')->insert([
            'exhibitionID' => '6',
            'name' => 'MON ART DU STYLE',
            'startDate' => '2018-12-4',
            'endDate' =>'2018-12-15',
            'limitOfAttend' => '5',
            'numberOfAttend' => '0',
            'detail' =>'An exhibition featuring garments and accessories from the wardrobe of Patsri Bunnag with new artworks and key pieces from the museum archives. Curated by Pring Bunnag, scenography by Ampol Jiramahapoka'
        ]);


    }
}
