<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDramaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

         Schema::create('Drama', function (Blueprint $table) {

           $table->increments('idDrama');
            $table->string('dramaName');
            $table->int('emissionYear');
            $table->string('description')->nullable();
            $table->string('genre')->nullable();
            $table->int('rating')->nullable();
            $table->string('dramaPhotoPath')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Drama');
    }
}
