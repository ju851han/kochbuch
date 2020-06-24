<?php

use Illuminate\Database\Seeder;

class ZutatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*TODO Kosten je Einheit ändern*/
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Baguette','1','g','Backwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Pizzateig','1','g','Backwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Toast','1','g','Backwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Lachs','1','g','Fisch & Meeresfrüchte',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Garnellen','1','g','Fisch & Meeresfrüchte',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Hähnchen','1','g','Fleisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Schweinefleisch','1','g','Fleisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Rindfleisch','1','g','Fleisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Karotten','1','g','Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Schnittlauch','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Rosmarin','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Salz','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Paprikapulver','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Curry','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Pfeffer','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Knoblauch','1','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ei(er)','1','Stk','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Reis','1','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Butter','1','g','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Milch','1','ml','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Sahne','1','ml','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Frischkäsche','1','EL','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ananas','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Banane','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Apfel','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Pfirsich','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Brokkoli','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Paprika','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Tomate','1','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Gnocchi','1','g','Teigwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Tagliatelle','1','g','Teigwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Tortellini','1','g','Teigwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Zucker','1','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Vanillezucker','1','g','Backartikel',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Weichweizengrieß','1','g','Grundnahrungsprodukt',NOW(),NOW());");

    }
}
