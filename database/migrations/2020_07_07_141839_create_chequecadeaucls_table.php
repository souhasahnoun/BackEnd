<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChequecadeauclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chequecadeaucls', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('reglementcls_id')->unsigned();
             $table->foreign('reglementcls_id')->references('id')->on('reglementcls')->onDelete('cascade')->onUpdate('cascade'); 
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
        Schema::dropIfExists('chequecadeaucls');
    }
}
