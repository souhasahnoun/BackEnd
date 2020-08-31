<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventaires', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('QteStock');
              $table->date('date');
              $table->string('login');

            $table->integer('produit_id')->unsigned();
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict'); 

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
        Schema::dropIfExists('inventaires');
    }
}
