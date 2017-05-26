<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dramas', function (Blueprint $table) {
             $table->increments('idDrama');
            $table->string('dramaName');
            $table->integer('emissionYear');
            $table->integer('numberOfEpisodes');
            $table->string('description')->nullable();
            $table->string('genre')->nullable();
            $table->integer('rating')->nullable();
            $table->string('dramaPhotoPath')->nullable();

            $table->integer('timesFavorited');
            
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
        Schema::dropIfExists('dramas');
    }
}
