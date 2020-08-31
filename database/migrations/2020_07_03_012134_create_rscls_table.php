<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRsclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rscls', function (Blueprint $table) {
            $table->increments('id');
             $table->date('date');
              $table->float('taux');
               $table->float('montant');
                $table->float('rs');
                 $table->float('net');
                  $table->integer('etat_pay');
                   $table->integer('imp');
					$table->date('debut');
					$table->date('fin');
                   $table->integer('reglementcls_id')->unsigned();
             $table->foreign('reglementcls_id')->references('id')->on('reglementcls')->onDelete('restrict')->onUpdate('restrict'); 
             
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
        Schema::dropIfExists('rscls');
    }
}
