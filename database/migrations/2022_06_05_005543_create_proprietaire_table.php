<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProprietaireTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietaire', function (Blueprint $table) {
            $table->id();
       
           
            $table->string('name');
            
            $table->string('email');
            $table->Integer('telephone');
            $table->Integer('numeroAppartement');
       
              
            $table->string('nomImmeuble');
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
        Schema::dropIfExists('proprietaire');
    }
}
