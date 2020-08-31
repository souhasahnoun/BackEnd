<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntreecaissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entreecaisses', function (Blueprint $table) {
            $table->increments('id');
             $table->float('montant');
              $table->string('type');
            $table->date('date');
                 $table->string('designation');
                  $table->string('login');
                  $table->string('beneficiaire');
                       $table->string('num_cheque');
                        $table->string('banque');
            $table->integer('caisse_id')->unsigned();
             $table->foreign('caisse_id')->references('id')->on('caisses')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('entreecaisses');
    }
}
