<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('User', function (Blueprint $table) {
            $table->increments('idUser');
            $table->string('userPassword');
            $table->string('userName');
            $table->string('nameUser')->nullable();
            $table->string('lastname')->nullable();
            $table->text('userDescription')->nullable();
            $table->enum('gender', ['Male', 'Female','Other'])->nullable();
            $table->date('birthday')->nullable();
            $table->string('userAvatarPath')->nullable();

            $table->integer('idGroup')->unsigned();
                 $table->foreign('idGroup')->references('idGroup')->on('Group');
            $table->integer('idArtist')->unsigned();
                 $table->foreign('idArtist')->references('idArtist')->on('Artist');
            $table->integer('idDrama')->unsigned();
                 $table->foreign('idDrama')->references('idDrama')->on('Drama');


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
        Schema::drop('User');
    }
}
