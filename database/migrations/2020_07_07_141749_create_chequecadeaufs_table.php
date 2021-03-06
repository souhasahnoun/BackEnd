<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequecadeaufsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chequecadeaufs', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('paiementfrs_id')->unsigned();
             $table->foreign('paiementfrs_id')->references('id')->on('paiementfrs')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('chequecadeaufs');
    }
}
