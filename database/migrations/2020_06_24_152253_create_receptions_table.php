<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receptions', function (Blueprint $table) {
            $table->increments('id');
              $table->string('num');
             $table->date('date');
              $table->string('piece');
            $table->string('accessoire');
                 $table->string('nom');
                  $table->string('tel');
                  $table->string('recu_par');
                       $table->string('panne');
                         $table->string('tache');
                        $table->float('prix');
                          $table->string('code');
                            $table->float('avance');
                              $table->string('type');
                                $table->integer('etat_pay');
                                  $table->integer('etat')->default(0);;
                                    $table->string('login');
                                      $table->integer('contact_clt');
                                        $table->string('affect');
                                          $table->string('partde');
                                           
                                            
                                                $table->float('frais')->default(0);
                                                  $table->string('designation');

            $table->integer('client_id')->unsigned();
             $table->foreign('client_id')->references('id')->on('clients')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('casier_id')->unsigned();
             $table->foreign('casier_id')->references('id')->on('casiers')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('receptions');
    }
}
