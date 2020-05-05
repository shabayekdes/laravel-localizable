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
        $this->call(WisdomSeederTable::class);
        $this->call(WisdomTranslationSeederTable::class);
    }
}
