<?php

use Illuminate\Database\Seeder;

class RezeptsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Erstes Rezept','Pasta','15','10.50','Schritt1,Schritt2',NOW(),NOW());");

    }
}
