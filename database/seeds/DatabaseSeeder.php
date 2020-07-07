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
        $this->call(UsersTableSeeder::class);
        $this->call(KochbuchesTableSeeder::class);
        $this->call(RezeptsTableSeeder::class);
        $this->call(ZutatsTableSeeder::class);
        $this->call(Rezept_ZutatTableSeeder::class);
        $this->call(Kochbuch_RezeptTableSeeder::class);
        $this->call(WochenkochplansSeeder::class);
    }
}
