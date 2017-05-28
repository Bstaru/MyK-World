<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReseniaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resenia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idUser')->unsigned()->nullable();;
                $table->foreign('idUser')->references('id')->on('Users');
            $table->integer('idDrama')->unsigned()->nullable();
                 $table->foreign('idDrama')->references('idDrama')->on('Dramas');

            $table->text('reseniaTxt')->nullable();
            

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
        Schema::dropIfExists('resenia');
    }
}
