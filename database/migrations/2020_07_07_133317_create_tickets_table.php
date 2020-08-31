<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('code');
                 $table->date('date');
                  $table->float('recu');
                   $table->float('rendre');
                    $table->string('type_reg');
                     $table->date('date_reception');
                       $table->integer('etat')->default(0);
                        $table->string('login');
            $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('document_id')->unsigned();
             $table->foreign('document_id')->references('id')->on('documents')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('tickets');
    }
}
