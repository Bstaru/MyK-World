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
        Schema::create('userDramas', function (Blueprint $table) {
            $table->integer('idUser')->unsigned()->nullable();;
                $table->foreign('idUser')->references('id')->on('Users');
            

            $table->integer('idDrama')->unsigned()->nullable();
                 $table->foreign('idDrama')->references('idDrama')->on('Dramas');

            $table->enum('dramaStatus', ['Watching', 'Completed','onHold', 'Dropped','Plan to watch'])->nullable();
            $table->integer('episodesWatched');

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
        Schema::dropIfExists('userDramas');
        Schema::table('role_user', function (Blueprint $table) {
        $table->dropForeign('role_user_role_id_foreign');
        $table->dropForeign('role_user_user_id_foreign');
        $table->dropPrimary();
    });
     
    }
}
