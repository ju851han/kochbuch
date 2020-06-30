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
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('1','2','Butter','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('2','2','Zucker','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('3','2','Vanillezucker','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('4','2','Weichweizengrieß','80');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('5','2','Pfirsich','125');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('6','2','Ei(er)','4');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('7','3','Schinken','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('9','3','Scheiblettenkäse','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('8','3','Milch','200');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('10','3','Ei(er)','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('11','3','Butter','10');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('12','3','Salz','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('13','3','Mehl','100');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('14','4','Fischstäbchen','6');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('15','4','Butter','10');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('16','5','Kartoffeln','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('17','5','Salz','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('18','5','Butter','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('19','5','Paprikapulver','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('20','5','Pfeffer','4');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('21','6','Blattsalat','4');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('22','6','Zwiebel','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('23','6','Paprika','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('24','6','Tomate','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('25','6','Zucker','5');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('26','6','Karotten','150');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('27','6','Olivenöl','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('28','6','Senf','50');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('29','6','Reis','450');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('30','6','Wasser','600');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('31','6','Essig','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('32','6','Zucker','10');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('33','6','Salz','1');");

    }
}
