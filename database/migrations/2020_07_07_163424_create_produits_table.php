<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->increments('id');
             $table->string('ref_prod');
              $table->string('nom_prod');
              $table->string('code');
            $table->float('mrg_ben_pub');
             $table->float('stk_alert');
              $table->string('unit');
               $table->string('image');

              $table->string('designation');
               $table->float('prix_achat');
                $table->float('tva');
                 $table->float('ristourne');
                   $table->float('points');
                     $table->float('mrg_ben_rev');
                      $table->float('prixf');
                    $table->float('prixfrev');
                    $table->float('prixrispub');
                   $table->float('prixrisrev');
                     
                       $table->float('prix_revient');
                         $table->integer('etat')->default(0);
                         $table->float('prix_min');
                        

                          $table->integer('categorie_id')->unsigned();
             $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('restrict')->onUpdate('restrict'); 

              $table->integer('famille_id')->unsigned();
             $table->foreign('famille_id')->references('id')->on('familles')->onDelete('restrict')->onUpdate('restrict'); 

              $table->integer('marque_id')->unsigned();
             $table->foreign('marque_id')->references('id')->on('marques')->onDelete('restrict')->onUpdate('restrict'); 

              $table->integer('tva_id')->unsigned();
             $table->foreign('tva_id')->references('id')->on('tvas')->onDelete('restrict')->onUpdate('restrict'); 
               $table->integer('unite_id')->unsigned();
             $table->foreign('unite_id')->references('id')->on('unites')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('produits');
    }
}
