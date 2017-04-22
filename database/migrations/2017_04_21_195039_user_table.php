<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('userName');
            $table->string('email');  
            $table->string('userPassword');
            $table->string('nameUser')->nullable();
            $table->string('lastname')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('gender', ['Male', 'Female','Other'])->nullable();

            $table->text('userDescription')->nullable();
            $table->string('userAvatarPath')->nullable();



              $table->boolean('showGender')->default(true);
              $table->boolean('showBirthday')->default(true);






            $table->integer('idGroup')->unsigned()->nullable();
                 $table->foreign('idGroup')->references('idGroup')->on('Group');

            $table->integer('idArtist')->unsigned()->nullable();
                 $table->foreign('idArtist')->references('idArtist')->on('Artist');

            $table->integer('idDrama')->unsigned()->nullable();
                 $table->foreign('idDrama')->references('idDrama')->on('Drama');

            $table->integer('idDramaArtist')->unsigned()->nullable();
                 $table->foreign('idDramaArtist')->references('idArtist')->on('Artist');
            



            $table->boolean('active')->default(true);

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
        Schema::dropIfExists('user');
    }
}
