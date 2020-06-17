<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRezeptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezepts', function (Blueprint $table) {
            $table->bigIncrements('rID');
            $table->string('rName',125);
            $table->string('kategorie',256);
            $table->integer('zeit');
            $table->unsignedFloat('kostenjePortion');
            $table->string('zubereitung',500);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rezepts');
    }
}
