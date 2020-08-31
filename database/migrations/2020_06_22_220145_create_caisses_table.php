<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caisses', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
                 $table->integer('cloture');
                  $table->float('montant_final');
                       $table->float('fond_caisse');
                        $table->string('login');
            $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict');
			$table->integer('client_id')->unsigned();
             $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('restrict'); 			 
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
        Schema::dropIfExists('caisses');
    }
}
