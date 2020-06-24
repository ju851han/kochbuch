<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezeptZutatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezept_zutat', function (Blueprint $table) {
            $table->id();
            $table->integer('rezept_rID')->unsigned();
            $table->string('zutat_zName',125);
            $table->unsignedFloat('menge');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezept_zutat');
    }
}
