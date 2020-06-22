<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKochbuchRezeptTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kochbuch_rezept', function (Blueprint $table) {
            $table->id();
            $table->integer('kochbuch_id')->unsigned();
            $table->integer('rezept_id')->unsigned();
            /* TODO Spalten hinzufügen
          $table->unsignedFloat('portion');
          $table->integer('reihenfolge')->unsigned();*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kochbuch_rezept');
    }
}
