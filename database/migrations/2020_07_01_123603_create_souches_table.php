<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSouchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('souches', function (Blueprint $table) {
            $table->increments('id');
             $table->string('num');

              $table->date('du');
               $table->date('au');
               
             $table->integer('etat')->default(0);
              $table->integer('banque_id')->unsigned();
             $table->foreign('banque_id')->references('id')->on('banques')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('souches');
    }
}
