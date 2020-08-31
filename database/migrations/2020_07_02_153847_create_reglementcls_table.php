<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReglementclsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reglementcls', function (Blueprint $table) {
            $table->increments('id');
             $table->date('date')->nullable();
              $table->string('mode')->nullable();
            $table->string('num')->nullable();
            
             $table->integer('etat')->default(0)->nullable();
              $table->integer('montant')->nullable();
                   $table->string('type_pay')->nullable();
                    $table->string('client')->nullable();
                      $table->string('banque')->nullable();
                       $table->date('date_echeance')->nullable();
               $table->string('etat_ch')->nullable();
            
            $table->string('etat_traite')->nullable();
               
                 
                  $table->string('type_date')->nullable();
                    $table->string('type_traite')->nullable();
                       $table->float('solder')->nullable();
                         $table->float('non_solder')->nullable();
                         $table->date('impression')->nullable();
                        
                      
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
        Schema::dropIfExists('reglementcls');
    }
}
