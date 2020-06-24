<?php

use Illuminate\Database\Seeder;

class Kochbuch_RezeptTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('1','1','1');");
    }
}
