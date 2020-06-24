<?php

use Illuminate\Database\Seeder;

class Rezept_ZutatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('1','1','Butter','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('2','1','Zucker','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('3','1','Vanillezucker','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('4','1','Weichweizengrieß','80');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('5','1','Pfirsich','125');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('6','1','Ei(er)','4');");
        /*        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('1','','','');");*/
    }
}
