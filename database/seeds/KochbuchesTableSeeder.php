<?php

use Illuminate\Database\Seeder;/*
use Illuminate\Support\Facades\DB;*/

class KochbuchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO kochbuches (kName, created_at, updated_at) VALUES ('Erstes Kochbuch',NOW(),NOW());");
        DB::insert("INSERT INTO kochbuches (kName, created_at, updated_at) VALUES ('Lieblingsrezepte',NOW(),NOW());");

    }
}
