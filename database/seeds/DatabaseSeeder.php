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
        // $this->call(UsersTableSeeder::class);
        $this->call(SlidersTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(PagesTableSeeder::class);
        $this->call(LabelsTableSeeder::class);
        //$this->call(TagsTableSeeder::class);
    }
}
