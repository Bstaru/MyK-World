<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserGroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userGroup', function (Blueprint $table) {
            $table->increments('idUser');
                $table->foreign('idUser')->references('idUser')->on('User');
            

            $table->integer('idGroup')->unsigned();
                 $table->foreign('idGroup')->references('idGroup')->on('Group');
            


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
        //
    }
}
