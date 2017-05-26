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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->default("Koopa");
            $table->string('email')->unique();  
            $table->string('password',255);
            $table->string('name')->nullable();
            $table->string('lastname')->nullable();
            $table->date('birthday')->nullable();
            $table->enum('gender', ['Male', 'Female','Other'])->nullable();

            $table->text('userDescription')->nullable();
            $table->string('userAvatarPath')->nullable();



              $table->boolean('showGender')->default(true);
              $table->boolean('showBirthday')->default(true);






            $table->integer('idGroup')->unsigned()->nullable();
                 $table->foreign('idGroup')->references('idGroup')->on('Groups');

            $table->integer('idArtist')->unsigned()->nullable();
                 $table->foreign('idArtist')->references('idArtist')->on('Artists');

            $table->integer('idDrama')->unsigned()->nullable();
                 $table->foreign('idDrama')->references('idDrama')->on('Dramas');

            $table->integer('idDramaArtist')->unsigned()->nullable();
                 $table->foreign('idDramaArtist')->references('idArtist')->on('Artists');
            



            $table->string('remember_token')->nullable();;
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
        Schema::dropIfExists('users');
    }
}
