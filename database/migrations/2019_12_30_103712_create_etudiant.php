<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtudiant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nom',25);
            $table->char('prenom',25);
            $table->char('niveau',3);
            $table->char('section',1)->nullable();
            $table->char('specialite',2)->nullable();
            $table->integer('groupe');
            $table->year('promo');
            $table->date('date_naissance');
            $table->string('adresse',20);
            
            
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
        Schema::dropIfExists('etudiants');
    }
}
