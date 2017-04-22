<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userDrama', function (Blueprint $table) {
            $table->increments('idUser');
                $table->foreign('idUser')->references('idUser')->on('User');
            

            $table->integer('idDrama')->unsigned();
                 $table->foreign('idDrama')->references('idDrama')->on('Drama');

            $table->enum('dramaStatus', ['Watching', 'Completed','onHold', 'Dropped','Plan to watch'])->nullable();
            $table->int('episodesWatched');

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
        Schema::dropIfExists('userDrama');
    }
}
