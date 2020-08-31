<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');

            $table->string('cin');
              $table->string('nom');
                $table->string('prenom');
                 $table->date('dateNaiss');
                  $table->string('tel');
                  $table->float('salaire');
                   $table->string('adresse');
                    $table->string('login');
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
        Schema::dropIfExists('personnels');
    }
}
