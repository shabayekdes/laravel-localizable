<?php

use Illuminate\Database\Seeder;
use App\Models\Translations\WisdomTranslation;

class WisdomTranslationSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(WisdomTranslation::class, 10)->create();

    }
}
