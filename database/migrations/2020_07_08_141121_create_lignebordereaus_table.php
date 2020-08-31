<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLignebordereausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lignebordereaus', function (Blueprint $table) {
            $table->increments('id');
             $table->string('source');
             $table->integer('source_id');
             $table->float('montant');
              
              $table->float('rs');
                $table->string('num');
                $table->string('type');
                  $table->string('banque');
                   $table->date('date');
            $table->integer('etat')->default(0);
                 
                 $table->string('type_ch');
                
                       $table->date('created');
                         $table->string('login');
                         $table->integer('reglementcls_id')->unsigned();
             $table->foreign('reglementcls_id')->references('id')->on('reglementcls')->onDelete('restrict')->onUpdate('restrict'); 
              $table->integer('bordereaus_id')->unsigned();
             $table->foreign('bordereaus_id')->references('id')->on('bordereaus')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('lignebordereaus');
    }
}
