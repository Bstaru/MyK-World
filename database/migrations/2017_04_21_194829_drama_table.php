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
        Schema::create('drama', function (Blueprint $table) {
             $table->increments('idDrama');
            $table->string('dramaName');
            $table->int('emissionYear');
            $table->int('numberOfEpisodes');
            $table->string('description')->nullable();
            $table->string('genre')->nullable();
            $table->int('rating')->nullable();
            $table->string('dramaPhotoPath')->nullable();

            $table->int('timesFavorited');
            
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
        Schema::dropIfExists('drama');
    }
}
