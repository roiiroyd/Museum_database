<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('ArtistTable');
        $this->call('ArtObjectTable');
        $this->call('BorrowedCollTable');
        $this->call('ExibitionTable');
        $this->call('HistoryTable');
        $this->call('ParticipationTable');
        $this->call('PermanentCollTable');
    }
}
