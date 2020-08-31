<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_frs');
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
        Schema::dropIfExists('fournisseurs');
    }
}
