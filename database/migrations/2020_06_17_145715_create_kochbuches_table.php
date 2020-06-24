<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKochbuchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kochbuches', function (Blueprint $table) {
            $table->bigIncrements('kID');
            $table->integer('users_id');
            $table->string('kName',125);
            $table->timestamps();/*für erstelltam und aktualisiertam*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kochbuches');
    }
}
