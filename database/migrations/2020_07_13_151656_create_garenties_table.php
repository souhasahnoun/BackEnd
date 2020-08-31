<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarentiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('garenties', function (Blueprint $table) {
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
					      $table->string('login');
                            
                                 $table->integer('etat')->default(0);

                                   $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
             
              $table->integer('utilisateur_id')->unsigned();
             $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('garenties');
    }
}
