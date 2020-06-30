<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Rezept_WochenkochplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('1','1','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('2','2','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('3','3','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('4','4','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('5','5','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('6','6','1');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('7','7','1');");

        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('8','7','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('9','6','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('10','5','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('11','4','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('12','3','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('13','2','2');");
        DB::insert("INSERT INTO rezept_wochenkochplan (id, rezept_rID, wochenkochplan_id)VALUES ('14','1','2');");

    }
}
