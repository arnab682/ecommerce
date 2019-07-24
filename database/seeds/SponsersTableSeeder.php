<?php

use App\Model\Sponser;
use Illuminate\Database\Seeder;

class SponsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sponser::class, 5)->create();
    }
}
