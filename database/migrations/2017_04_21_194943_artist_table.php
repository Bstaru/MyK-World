<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ArtistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->increments('idArtist');
            $table->enum('typeArtist', ['Idol', 'Actor']);
            $table->integer('idGroup')->unsigned()->nullable();
            $table->foreign('idGroup')->references('idGroup')->on('Groups');            
            $table->string('artistName');
            $table->string('artistFullName');
            $table->string('agency')->nullable();
            $table->float('height')->nullable();
            $table->float('wheight')->nullable();
            $table->text('biography')->nullable();
            $table->string('bornPlace')->nullable();
            $table->date('artistbirthday')->nullable();
            $table->enum('artistGender', ['Male', 'Female','Other'])->nullable();
            $table->string('bloodType')->nullable();
            $table->text('songs')->nullable();
            $table->text('more')->nullable();           
            $table->string('artistAvatarPath')->nullable();
           $table->integer('timesFavorited')->default(0);

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
        Schema::dropIfExists('artists');
    }
}
