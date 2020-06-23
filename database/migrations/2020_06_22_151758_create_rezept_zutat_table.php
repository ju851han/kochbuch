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
            $table->integer('rID');
            $table->string('zName',125);
    /*        TODO add  column
            $table->unsignedFloat('Menge');*/
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
