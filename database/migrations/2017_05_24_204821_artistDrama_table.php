<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtistDramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artistDramas', function (Blueprint $table) {
             $table->integer('idDrama')->unsigned();
                 $table->foreign('idDrama')->references('idDrama')->on('Dramas');
             $table->integer('idArtist')->unsigned();
                 $table->foreign('idArtist')->references('idArtist')->on('Artists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
            Schema::dropIfExists('artistDramas');
        
    }
}
