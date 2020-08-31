<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTracabilitestocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracabilitestocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('module');

              $table->string('operation');
               $table->integer('qte');
             $table->integer('qtestock');
             
              $table->string('login');
               $table->date('created');

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
        Schema::dropIfExists('tracabilitestocks');
    }
}
