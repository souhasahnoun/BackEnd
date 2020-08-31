<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLignedocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignedocuments', function (Blueprint $table) {
            $table->increments('id');
             $table->float('prix');
              $table->integer('qte');
               $table->float('tva');
                $table->string('designation');
                 $table->float('remise');

            $table->integer('document_id')->unsigned();
             $table->foreign('document_id')->references('id')->on('documents')->onDelete('restrict')->onUpdate('restrict'); 
             
              $table->integer('produit_id')->unsigned();
             $table->foreign('produit_id')->references('id')->on('produits')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('lignedocuments');
    }
}
