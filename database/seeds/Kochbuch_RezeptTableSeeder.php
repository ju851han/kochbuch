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
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('2','1','2');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('3','2','2');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('4','2','5');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('5','3','5');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('6','3','4');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('7','3','3');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('8','4','2');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('9','4','6');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('10','5','5');");
        DB::insert("INSERT INTO kochbuch_rezept (id, kochbuch_kID, rezept_rID)VALUES ('11','4','7');");
    }
}
