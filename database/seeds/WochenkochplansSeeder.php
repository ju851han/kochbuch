<?php

use Illuminate\Database\Seeder;

class WochenkochplansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('1','1','Montag','1',1);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('2','1','Dienstag','1',2);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('3','1','Mittwoch','1',3);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('4','1','Donnerstag','1',4);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('5','1','Freitag','1',5);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('6','1','Samstag','1',6);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('7','1','Sonntag','1',7);");

        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('8','2','Montag','1.5',7);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('9','2','Dienstag','1.5',3);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('10','2','Mittwoch','1.3',4);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('11','2','Donnerstag','1.5',5);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('12','2','Freitag','1.5',2);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('13','2','Samstag','1.5',1);");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion, rezept_rID) VALUES ('14','2','Sonntag','2',6);");
    }
}
