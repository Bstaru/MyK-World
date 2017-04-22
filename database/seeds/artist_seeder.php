<?php

use Illuminate\Database\Seeder;

class artist_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drama')->insert([
            'typeArtist' => 1,
            'idGroup' => 1,
            'artistName' => str_random(10),
            'artistFullName' => str_random(10),
            'agency' => str_random(10),
            'height' => 1.78;
            'wheight' => 60,
            'biography' => str_random(10),
            'bornPlace' => str_random(10),
            'artistbirthday' => null,
            'artistGender' => 1,
            'bloodType' => O,
            'songs' => str_random(100),
            'more' => str_random(10);
            'artistAvatarPath' => str_random(200),
            'timesFavorited' => 300,
         
        ]);
    }
}
