<?php

use Illuminate\Database\Seeder;

class drama_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drama')->insert([
            'dramaName' => str_random(10),
            'emissionYear' => 2013,
            'numberOfEpisodes' => 7,
            'description' => str_random(200),
            'genre' => str_random(10),
            'rating' => 7.8;
            'dramaPhotoPath' => str_random(200),
            'timesFavorited' => 300,
         
        ]);
    }
}
