<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
             $table->string('code_clt');
            $table->string('raison_social');
            $table->string('email');
            $table->string('site_web');
            $table->string('tel');
            $table->string('gsm');
            $table->string('personne_contacter');
            $table->string('fax');
            $table->string('adresse');
            $table->date('date_aff');
            $table->integer('etat')->default(0);
            $table->string('mf');
            $table->string('rc');
            $table->integer('archive')->default(0);
            $table->string('type');
            $table->float('timbre');
            $table->decimal('plafond');
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
        Schema::dropIfExists('clients');
    }
}
