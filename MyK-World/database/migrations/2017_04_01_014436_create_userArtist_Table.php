<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userArtist', function (Blueprint $table) {
            $table->increments('idUser');
                $table->foreign('idUser')->references('idUser')->on('User');
            

            $table->integer('idArtist')->unsigned();
                 $table->foreign('idArtist')->references('idArtist')->on('Artist');
            


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
         Schema::drop('userArtist');
    }
}
