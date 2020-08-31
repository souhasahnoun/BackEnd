<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLignepaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignepaiements', function (Blueprint $table) {
            $table->increments('id');
              $table->integer('montant');
               $table->integer('document_id')->unsigned();
            $table->foreign('document_id')->references('id')->on('documents') ->onDelete('cascade') ->onUpdate('cascade');
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
        Schema::dropIfExists('lignepaiements');
    }
}
