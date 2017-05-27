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
        DB::table('users')->insert([
            'username' => 'bstaru95',
            'email' => 'ncm1208@gmail.com',
            'password' => 'shineekey',
            'name' => 'Natalie',
            'lastname' => 'Conde Mejía',
            'birthday' => '1995-12-08',
            'gender' => 2,
            'userDescription' => 'Soy chida ekisde',
            'userAvatarPath' => '', //..\assets\images\Images\1io.png
            'showGender' => 1,
            'showBirthday' => 1,
            'idGroup' => null, 
            'idArtist' => null,
            'idDrama' => null,
            'idDramaArtist' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('users')->insert([
            'username' => 'shio',
            'email' => 'shio@gmail.com',
            'password' => 'shio',
            'name' => 'Rocío',
            'lastname' => 'Hernández Ramírez',
            'birthday' => '1995-07-11',
            'gender' => 2,
            'userDescription' => 'HUAS HUAS HUAS',
            'userAvatarPath' => '',//..\assets\images\Images\1hue.jpg
            'showGender' => 0,
            'showBirthday' => 1,
            'idGroup' => null,
            'idArtist' => null,
            'idDrama' => null,
            'idDramaArtist' => null,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
