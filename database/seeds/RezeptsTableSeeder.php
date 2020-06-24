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
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Grießauflauf','Vegetarisch','45','10.50','Auflaufform einfetten. Den Backofen auf 175 Grad Ober-/Unterhitze vorheizen. Die Pfirsiche gut abtropfen lassen und ggf. in Spalten schneiden. Die Eiweiße mit Rührgeräte steif schlagen. Anschließend in eine weitere Schüssel die Butter mit Zucker und Vanillezucker schaumig rühren. Nach und nach die Eigelbe unterrühren. Schließlich den Quark und dann den Grieß einrühren. Zuletzt den Eischnee von Hand mit einem Schneebesen vorsichtig unterheben. Die Pfirsiche unterheben. Zu guter Letzt alles in die  Auflaufform geben und etwas glatt streichen. Den Auflauf auf der mittleren Schiene ca. 20 Minuten backen.',NOW(),NOW());");

    }
}
