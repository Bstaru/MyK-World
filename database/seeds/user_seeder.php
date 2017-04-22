<?php

use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('user')->insert([
            'userName' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'userPassword' => bcrypt('secret'),
            'nameUser' => str_random(10),
            'lastname' => str_random(10),
            'birthday' => now();
            'gender' => 1,
            'userDescription' => str_random(200),
            'userAvatarPath' => str_random(200),
            'showGender' => str_random(10),
            'showBirthday' => str_random(10),
            'idGroup' => str_random(10),
            'idArtist' => str_random(10),
            'idDrama' => str_random(10),
            'idDramaArtist' => str_random(10),

        ]);
    }
}
