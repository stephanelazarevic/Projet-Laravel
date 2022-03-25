<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarteEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carte_etudiants', function (Blueprint $table) {
            $table->id();
            $table->string('nomEtudiant');
            $table->string('prenomEtudiant');
            $table->string('email')->unique();
            $table->date('date');
            $table->integer('tel');
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
        Schema::dropIfExists('carte_etudiants');
    }
};
