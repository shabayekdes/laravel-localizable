<?php

use App\Models\Wisdom;
use Illuminate\Database\Seeder;

class WisdomSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wisdom::class, 10)->create();
    }
}
