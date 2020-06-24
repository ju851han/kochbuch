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
        DB::insert("INSERT INTO kochbuches (kName, users_id, created_at, updated_at) VALUES ('Erstes Kochbuch',1,NOW(),NOW());");
        DB::insert("INSERT INTO kochbuches (kName, users_id, created_at, updated_at) VALUES ('Lieblingsrezepte',2, NOW(),NOW());");

    }
}
