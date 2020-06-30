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
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('1','1','Montag','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('2','1','Dienstag','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('3','1','Mittwoch','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('4','1','Donnerstag','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('5','1','Freitag','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('6','1','Samstag','1');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('7','1','Sonntag','1');");

        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('1','2','Montag','1.5');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('2','2','Dienstag','1.5');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('3','2','Mittwoch','1.3');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('4','2','Donnerstag','1.5');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('5','2','Freitag','1.5');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('6','2','Samstag','1.5');");
        DB::insert("INSERT INTO wochenkochplans (id, users_id, wochentag, portion)VALUES ('7','2','Sonntag','2');");

    }
}
