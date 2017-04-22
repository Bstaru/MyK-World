<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group', function (Blueprint $table) {
             $table->increments('idGroup');
            $table->string('groupName');
            $table->enum('groupType', ['Male', 'Female','Mix']);
            $table->int('memberNumber');
            $table->string('agency')->nullable();
            $table->date('dateOfDebut')->nullable();
            $table->string('fansite')->nullable();
            $table->string('fandom')->nullable();
         //   $table->string('musicalVideoPath')->nullable();
            $table->string('song1')->nullable();
            $table->string('song2')->nullable();
            $table->string('song3')->nullable();
            $table->string('groupPhotoPath')->nullable();

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
        Schema::dropIfExists('group');
    }
}
