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
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ananas','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Aprikose','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Apfel','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Apfelsaft','0.01','ml','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Aubergine','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Avocado','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Baguette','0.02','g','Backwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Banane','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Birne','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Blattsalat','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Blumenkohl','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Bohnen','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Brokkoli','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Bulgur','0.01','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Butter','0.01','g','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Chili','0.01','g','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Curry','0.01','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Couscous','0.01','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Datteln','0.35','Stk','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ei(er)','0.23','Stk','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Erbsen','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Erdbeeren','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Erdbeereis','0.08','Kugel','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Essig','0.01','ml','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Fischstäbchen','0.15','Stk','Fisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Frischkäse','0.01','EL','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Frühlingszwiebel','0.05','Stk','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Garnellen','0.01','g','Fisch & Meeresfrüchte',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Gnocchi','0.01','g','Teigwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Hackfleisch','0.01','g','Fleisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Hähnchen','0.01','g','Fleisch',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Haselnüsse','0.01','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Himbeeren','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ingwer','0.01','g','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Joghurt','0.01','g','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Karotten','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Kartoffeln','0.10','Stk','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Ketchup','0.01','g','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Kichererbsen','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Knoblauch','0.01','TL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Lachs','0.01','g','Fisch & Meeresfrüchte',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Linsen','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Mais','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Mango','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Melone','0.01','g','Obst & Gemüse',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Mehl','0.01','ml','Backwaren',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Milch','0.01','ml','Milchprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Nudeln','0.01','g','Grundnahrungsprodukt',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName,kostenjeEinheit,mengeneinheit,produktgruppe,created_at, updated_at) VALUES ('Olivenöl','0.03','EL','Gewürze',NOW(),NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Orange', '0.25', 'Stk', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Paprika', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Paprikapulver', '0.01', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Parmesan', '0.01', 'g', 'Milchprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Petersilie', '0.01', 'g', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Pfeffer', '0.01', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Pfirsich', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Pizzateig', '0.01', 'g', 'Backwaren', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Quark', '0.01', 'g', 'Milchprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Reis', '0.01', 'g', 'Grundnahrungsprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Rindfleisch', '0.01', 'g', 'Fleisch', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Rosmarin', '0.01', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Rucola', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Salatgurke', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Sahne', '0.01', 'ml', 'Milchprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Salz', '0.01', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Schafskäse', '0.01', 'ml', 'Milchprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Scheiblettenkäse', '0.01', 'TL', 'Milchprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Schinken', '0.01', 'g', 'Fleisch', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Schnittlauch', '0.01', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Schweinefleisch', '0.01', 'g', 'Fleisch', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Senf', '0.02', 'TL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Sojasauce', '0.02', 'EL', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Spargel', '0.01', 'ml', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Spinat', '0.01', 'ml', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Tagliatelle', '0.01', 'g', 'Teigwaren', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Thunfisch', '0.01', 'g', 'Fisch', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Toast', '0.15', 'Scheiben', 'Backwaren', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Tomate', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Tomatenmark', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Tortellini', '0.01', 'g', 'Teigwaren', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Vanillezucker', '0.01', 'g', 'Backwaren', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Wahlnüsse', '0.01', 'g', 'Grundnahrungsprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Wasser', '0.00', 'ml', 'Grundnahrungsprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Weichweizengrieß', '0.01', 'g', 'Grundnahrungsprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Zwiebel', '0.10', 'Stk', 'Grundnahrungsprodukt', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Zitrone', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Zimt', '0.01', 'g', 'Gewürze', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Zucchini', '0.01', 'g', 'Obst & Gemüse', NOW(), NOW());");
        DB::insert("INSERT INTO zutats(zName, kostenjeEinheit, mengeneinheit, produktgruppe, created_at, updated_at) VALUES('Zucker', '0.01', 'g', 'Grundnahrungsprodukt', NOW(), NOW());");
    }
}
