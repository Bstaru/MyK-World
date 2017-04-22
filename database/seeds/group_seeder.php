<?php

use Illuminate\Database\Seeder;

class group_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group')->insert([
            'groupName' => str_random(10),
            'groupType' => 1,
            'memberNumber' => 7,
            'agency' => str_random(10),
            'dateOfDebut' => null,
            'fansite' => str_random(10);
            'fandom' => str_random(10),
            'musicalVideoPath' => str_random(200),
            'userAvatarPath' => str_random(200),
            'song1' => str_random(10),
            'song2' => str_random(10),
            'song3' => str_random(10),
            'groupPhotoPath' => str_random(10),
            'timesFavorited' => 20,

        ]);
    }
}
