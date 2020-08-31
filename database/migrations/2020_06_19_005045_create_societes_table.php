<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocietesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prefixe');
             $table->string('nom');
            $table->string('adresse');
             $table->string('tel');
            $table->string('fax');
             $table->string('gsm');
             $table->string('email');
            $table->string('site_web');
              $table->string('mf');
            $table->string('rc');
            $table->string('rib');
             $table->string('iban');
              $table->string('cd');
              $table->integer('magasin_id')->unsigned();
             $table->foreign('magasin_id')->references('id')->on('magasins')->onDelete('restrict')->onUpdate('restrict'); 
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
        Schema::dropIfExists('societes');
    }
}
