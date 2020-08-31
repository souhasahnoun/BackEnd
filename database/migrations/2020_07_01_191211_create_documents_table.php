<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('num')->nullable();
             $table->date('date')->nullable();
             $table->integer('etat')->default(0)->nullable();
              $table->integer('fodec')->nullable();
               $table->integer('etat_pay')->nullable();
                 $table->string('type_pay')->nullable();
              $table->float('rs')->nullable();
            $table->string('etat_rs')->nullable();
                 $table->string('login')->nullable();
                  $table->date('date_retenu')->nullable();
                  $table->integer('type')->nullable();
                       $table->date('date_prev')->nullable();
                         $table->date('date_dec')->nullable();
                        $table->integer('timbre')->nullable();
                         $table->date('date_fin')->nullable();
                           $table->string('designation')->nullable();
                            $table->integer('fournisseur_id')->unsigned()->nullable();
             $table->foreign('fournisseur_id')->references('id')->on('fournisseurs')->onDelete('restrict')->onUpdate('restrict'); 
               $table->integer('client_id')->unsigned()->nullable();
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
        Schema::dropIfExists('documents');
    }
}
