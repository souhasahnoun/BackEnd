<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsfrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsfrs', function (Blueprint $table) {
            $table->increments('id');
             $table->date('date');
              $table->float('taux');
               $table->float('montant');
                $table->float('rs');
                 $table->float('net');
                  $table->integer('etat_pay');
                   $table->integer('imp');
                     $table->integer('etat_imp');
                       $table->date('created');

                       $table->integer('fournisseur_id')->unsigned();
             $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('restrict')->onUpdate('restrict'); 

                        $table->integer('paiementfrs_id')->unsigned();
            $table->foreign('paiementfrs_id')->references('id')->on('paiementfrs') ->onDelete('cascade') ->onUpdate('cascade');



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
        Schema::dropIfExists('rsfrs');
    }
}
