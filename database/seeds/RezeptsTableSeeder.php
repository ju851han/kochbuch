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
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Schinken-Käse-Pfannkuchen','Fleisch','20','2.50','Pfannkuchenteig zubereiten (Milch, Mehl, Ei und Salz mischen). Anschließend in die Pfanne damit. Wenn der Teig durch ist, je eine Scheibe Schinken und reichlich Käse darauf verteilen. Anschließend aufrollen und servieren.',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Fischstäbchen','Fisch','15','3.00','Fischstäbchen nach Packungsanleitung zubereiten und genießen.',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Pommes','Snacks','30','5.00','Kartoffeln waschen, schälen und in Streifen schneiden. Anschließend mit etwas Öl und Gewürzen vermischen. Auf einem Backblech ausbreiten und für etwa 25-30 minuten bei 200°C Umluft in den Backofen. Anschließend mit Mayo servieren, fertig.',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Gemischter Salat','Vegetarisch','25','5.00','Die Zwiebeln in etwas von dem Olivenöl anbraten, wenn die Zwiebeln glasig sind, die geschnittene Paprika hinzufügen. Beides wird in der Pfanne mit etwas Salz, Pfeffer und braunem Zucker geröstet. In der Zwischenzeit den Salat waschen, danach die Karotten in Scheiben und die Cherrytomaten in Viertel schneiden. Die Zwiebel-/Paprikamischung kann derweil etwas abkühlen, damit der Salat beim Zusammenmischen nicht zerfällt. Den Rest vom Olivenöl nun mit dem Senf, dem Sambal Oelek, dem Essig, dem Honig und den Kräutern gut verrühren - das Dressing mit Salz und Pfeffer gut abschmecken. Das Dressing drüber und gut vermischen.',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Sushi-Reis','Vegetarisch','35','5.00','Reis in einem Sieb gründlich waschen, bis das Wasser klar bleibt, anschließend gut abtropfen lassen.
Den Reis mit der angegebenen Menge Wasser in den Topf geben und ca. 20 Min. ruhen lassen.
Dann den Topf mit einem gut sitzenden Deckel schließen und den Inhalt langsam erwärmen. Die Hitze dann auf die größte Stufe stellen und zum Kochen bringen. Nun wieder auf die kleinste Stufe stellen und den Reis ca. 10 Minuten ausquellen lassen.
Den Topf vom Herd nehmen, ein gefaltetes Küchentuch unter den Deckel legen und den Reis noch 10 Min. nachquellen lassen. Die Würzzutaten in einem Topf mischen und erwärmen, bis Zucker und Salz sich ganz aufgelöst haben.
Anschließend die Würzmischung über den Reis geben und miteinander vermengen. ',NOW(),NOW());");

        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Apfel-Möhren-Salat','Vegetarisch','35','5.00',' Zubereitungsschritte
1.

Öl, Zitronen- und Apfelsaft in einem Schüttelbecher miteinander vermengen und mit Pfeffer und Jodsalz abschmecken.
2.

Möhren putzen, schälen und grob raspeln. Äpfel waschen, vierteln und ohne die Kerngehäuse ebenfalls grob raspeln. Möhren- und Äpfelraspel zügig in einer Schüssel mit dem Dressing mischen, da der Apfel sonst braun wird.
',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Frischer Obst-Toast mit Quark','Vegetarisch','35','5.00','1.
Halben Apfel waschen, zu Vierteln halbieren und entkernen.
2.
Frischer Obst-Toast mit Quark Zubereitung Schritt 2
1 Viertel grob zerkleinern, in eine kleine Schüssel geben und mit einem Stabmixer pürieren.
3.
Frischer Obst-Toast mit Quark Zubereitung Schritt 3
Anschließend Haselnüsse, Konfitüre und Zimt unterrühren.
4.
Frischer Obst-Toast mit Quark Zubereitung Schritt 4
Vollkorntoast toasten und mit dem Quark bestreichen. Apfel-Aprikosen-Mus auf dem Quark verteilen.
5.
Frischer Obst-Toast mit Quark Zubereitung Schritt 5
2. Apfelviertel in dünne Scheiben schneiden und Toast damit belegen.',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Quarkcreme mit Eis und Obst','Vegetarisch','35','5.00','Zubereitungsschritte
1.
Quarkcreme mit Eis und Obst Zubereitung Schritt 1

Den Apfel waschen, trocken reiben, achteln und entkernen. Erst in dünne Scheiben, dann in Stifte schneiden.
2.
Quarkcreme mit Eis und Obst Zubereitung Schritt 2

Erdbeeren waschen, putzen und in Scheiben schneiden. Die Pistazien mit einem großen Messer fein hacken.
3.
Quarkcreme mit Eis und Obst Zubereitung Schritt 3

Das Eis in einer kleinen Schüssel etwas antauen lassen. Quark zugeben und mit einem Schneebesen cremig schlagen.
4.
Quarkcreme mit Eis und Obst Zubereitung Schritt 4

Apfel und Erdbeeren unterheben, mit Pistazien bestreuen und sofort servieren.
',NOW(),NOW());");

        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Hähnchenspieße mit Couscous','Fleisch','40','5.00','1.
Hähnchenfilet abspülen, mit Küchenpapier trockentupfen und in etwa 2 cm große Würfel schneiden.
2.
Orangen halbieren und auspressen.
3.
Vom Orangensaft 3 EL abnehmen und mit 1 EL Rapsöl und der Konfitüre in einer Schüssel verrühren. Mit Paprika- und Currypulver und Salz und Pfeffer würzen.
4.
Hähnchenfilet unter die Mischung heben und zugedeckt im Kühlschrank ziehen lassen (marinieren).
5.
Paprikaschote vierteln, entkernen und waschen. 3 Viertel in ca. 2 cm große Würfel schneiden, das letzte Viertel sehr klein würfeln und in einer kleinen Schüssel beiseitestellen.
6.
Aprikosen waschen, halbieren, entsteinen und in Spalten schneiden.
7.
Den restlichen Orangensaft mit Wasser auf 220 ml auffüllen und in einem kleinen Topf aufkochen. Couscous mit etwas Salz und 1 Prise Curry unterrühren, vom Herd nehmen und etwa 15 Minuten quellen lassen.
8.
Inzwischen Petersilie waschen, Blätter abzupfen und hacken.
9.
Hähnchenfilet aus der Marinade nehmen, etwas abtropfen lassen und abwechselnd mit Paprikastücken und Aprikosenspalten auf 4 Schaschlikspieße stecken.
10.
Das restliche Öl in einer flachen Pfanne erhitzen. Die Spieße darin bei mittlerer Hitze unter häufigem Wenden braten, bis das Fleisch rundherum goldbraun ist; das dauert 8-10 Minuten. Marinade dazugeben und aufkochen lassen.
11.
Petersilie und die feingewürfelte Paprikaschote unter den Couscous heben. Mit Salz und Pfeffer abschmecken und zu den Spießen servieren.
',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Nudeln mit Nuss-Tomaten-Sauce','Vegetarisch','35','5.00','1.
Zwiebeln und Knoblauch schälen und klein würfeln. Möhren waschen, putzen, schälen und auf einer Vierkantreibe grob raspeln.
2.
Zucchini putzen, waschen und ebenfalls grob raspeln.
3.
Das Öl in einem weiten Topf erhitzen. Zwiebeln und Knoblauch darin bei mittlerer Hitze glasig dünsten. Möhren- und Zucchiniraspel zugeben und etwa 1 Minute mit andünsten.
4.
Tomatenmark zufügen und kurz mitrösten. Apfelsaft und passierte Tomaten unterrühren. Mit Salz, Pfeffer und Oregano würzen. Bei kleiner Hitze im offenen Topf alles etwa 20 Minuten köcheln lassen, bis die Sauce sämig wird.
5.
Inzwischen die Nudeln nach Packungsanleitung in reichlich kochendem Salzwasser bissfest garen. Walnüsse in einem Blitzhacker fein zerkleinern und in einer beschichteten Pfanne anrösten, bis sie anfangen zu duften.
6.
Walnüsse zum Schluss unter die Tomatensauce mischen, nochmals mit Salz und Pfeffer abschmecken. Nudeln abgießen, abtropfen lassen und mit der Sauce servieren.
',NOW(),NOW());");

        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Vegetarische Nudelpfanne','Vegetarisch','30','5.10','1.
In einem Topf 500 ml Salzwasser zum Kochen bringen, die Mie-Nudeln hineingeben und einmal aufkochen. Bei kleiner Hitze zugedeckt etwa 5 Minuten ziehen lassen, dann in einem Sieb abgießen und abtropfen lassen.
2.
Brokkoli waschen, putzen und die Röschen vom Stiel schneiden. Den Stiel schälen und fein hacken.
3.
Möhre waschen, putzen, schälen und auf einem Gemüsehobel oder mit einem Sparschäler in dünne Streifen hobeln.
4.
Frühlingszwiebel waschen, putzen und in feine Ringe schneiden. Knoblauchzehe schälen und fein hacken.
5.
Cashewkerne mit Öl in einem Wok oder einer großen tiefen Pfanne erhitzen. Möhren, Brokkolistiele, Knoblauch und 1 Msp. Gewürzmischung dazugeben und unter Rühren etwa 5 Minuten braten.
6.
Frühlingszwiebeln und Brokkoliröschen zufügen und alles weitere 2 Minuten unter Rühren braten. Mit Sojasauce abschmecken.
7.
Die Sprossen kalt abspülen, gut abtropfen lassen und mit den gekochten Nudeln unter das Gemüse mischen. Unter ständigem Rühren alles weitere 2 Minuten braten und sofort servieren.
',NOW(),NOW());");
        DB::insert("INSERT INTO rezepts (rName,kategorie,zeit,kostenjePortion,zubereitung, created_at, updated_at) VALUES ('Brokkoli-Rahm-Kartoffeln','Vegetarisch','25','5.00','1.
Brokkoli waschen und in Röschen zerteilen. Die Stiele schälen und in kleine Würfel schneiden. Kartoffeln waschen, schälen und ebenfalls würfeln.
2.
In einem Topf 150 ml Wasser mit 1/2 TL Salz aufkochen lassen. Kartoffeln und Brokkolistiele dazugeben und zugedeckt 10–15 Minuten bissfest garen.
3.
Inzwischen die Kürbiskerne mit einem großen Messer grob hacken und in einer beschichteten Pfanne kurz anrösten.
4.
Brokkoliröschen und Milch zu den Kartoffeln geben. Einige Minuten weiterdünsten, bis alles gar ist.
5.
Frischkäse unterrühren und schmelzen lassen. Mit Salz und Pfeffer würzen. (Wenn die Flüssigkeit zu dick ist, noch etwas Wasser zugeben.) Kürbiskerne darüberstreuen und die Brokkoli-Rahm-Kartoffeln servieren.
',NOW(),NOW());");


    }
}
