<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWochenkochplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wochenkochplans', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->string('wochentag',10);
            $table->unsignedFloat('portion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wochenkochplans');
    }
}
