<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('QteStock');
            $table->integer('produit_id')->unsigned();
            $table->foreign('produit_id')->references('id')->on('produits') ->onDelete('cascade') ->onUpdate('cascade');
            $table->integer('magasin_id')->unsigned();
            $table->foreign('magasin_id')->references('id')->on('magasins') ->onDelete('cascade') ->onUpdate('cascade');
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
        Schema::dropIfExists('stocks');
    }
}
