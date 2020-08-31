<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casiers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('num');
              $table->date('date');
             
            $table->string('login');
            
           
              $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('casiers');
    }
}
