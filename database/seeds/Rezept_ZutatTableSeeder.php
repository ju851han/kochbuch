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


        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('29','7','Reis','450');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('30','7','Wasser','600');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('31','7','Essig','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('32','7','Zucker','10');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('33','7','Salz','1');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('34','8','Olivenöl','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('35','8','Zitrone','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('36','8','Apfel','80');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('37','8','Pfeffer','1');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('38','9','Apfel','50');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('39','9','Haselnüsse','15');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('40','9','Zimt','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('41','9','Toast','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('42','9','Quark','40');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('43','10','Apfel','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('44','10','Erdbeeren','30');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('45','10','Wahlnüsse','5');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('46','10','Quark','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('47','10','Erdbeereis','1');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('48','11','Hähnchen','220');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('49','11','Orange','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('50','11','Olivenöl','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('51','11','Paprikapulver','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('52','11','Curry','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('53','11','Salz','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('54','11','Pfeffer','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('55','11','Paprika','200');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('56','11','Aprikose','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('57','11','Couscous','140');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('58','11','Petersilie','20');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('59','12','Zwiebel','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('60','12','Knoblauch','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('61','12','Karotten','200');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('62','12','Zucchini','500');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('63','12','Olivenöl','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('64','12','Tomatenmark','80');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('65','12','Apfelsaft','150');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('66','12','Tomaten','1600');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('67','12','Salz','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('68','12','Pfeffer','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('69','12','Nudeln','600');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('70','12','Wahlnüsse','100');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('71','13','Salz','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('72','13','Nudeln','160');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('73','13','Brokkoli','250');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('74','13','Karotten','100');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('75','13','Zwiebel','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('76','13','Knoblauch','5');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('77','13','Wahlnüsse','30');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('78','13','Olivenöl','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('79','13','Curry','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('80','13','Pfeffer','2');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('81','13','Sojasauce','1');");

        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('82','14','Brokkoli','400');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('83','14','Kartoffeln','500');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('84','14','Salz','1');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('85','14','Milch','200');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('86','14','Frischkäse','120');");
        DB::insert("INSERT INTO rezept_zutat (id, rezept_rID, zutat_zName, menge)VALUES ('87','14','Pfeffer','1');");

    }
}
