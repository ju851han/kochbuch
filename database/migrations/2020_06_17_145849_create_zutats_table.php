<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZutatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zutats', function (Blueprint $table) {
            $table->string('zName',256);
            $table->unsignedFloat('kostenjeEinheit');
            $table->string('mengeneinheit',20);
            $table->string('produktgruppe',125);
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
        Schema::dropIfExists('zutats');
    }
}
