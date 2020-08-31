<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaiementpersonnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiementpersonnels', function (Blueprint $table) {
            $table->increments('id');
            $table->float('montant');
                 $table->date('date');
                  $table->date('date_salaire');
                   $table->string('remarque');
                    $table->string('login');
            $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('personnel_id')->unsigned();
             $table->foreign('personnel_id')->references('id')->on('personnels')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('paiementpersonnels');
    }
}
