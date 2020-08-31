<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLigneticketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignetickets', function (Blueprint $table) {
            $table->increments('id');
            $table->float('prix');
              $table->float('qantite');
            $table->float('tva');
                 $table->string('designation');
                  $table->integer('remise');
                  $table->integer('qte_ret');
                       $table->float('puachat');
                        $table->float('prixrev');
            $table->integer('ticket_id')->unsigned();
             $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('produit_id')->unsigned();
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('lignetickets');
    }
}
