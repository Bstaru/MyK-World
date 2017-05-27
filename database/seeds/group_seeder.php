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
        DB::table('groups')->insert([
            'groupName' => 'EXO',
            'descpGroup'=> '¿Por Qué "EXO"?: EXO viene de la palabra EXO Planet, nombre del planeta donde ellos provienen. EXO Planet viene del término en ingles Extra Solar Planet que en español significa Planeta Extra Solar, es decir, Planeta que está fuera del Sistema Solar',
            'groupType' => 1,
            'memberNumber' => 9,
            'agency' => 'SM Entretaiment',
            'dateOfDebut' => '2012-04-08',
            'fansite' => 'http://exo.smtown.com/Intro',
            'fandom' => 'EXO-L',
            'song1' => 'Overdose',
            'song2' => 'Monster',
            'song3' => 'Love Me Right',
            'groupPhotoPath' => '..\assets\images\Images\exo.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('groups')->insert([
            'groupName' => 'SHINee',
            'descpGroup'=> '¿Por qué "SHINee"?: “Personas que reciben y emiten luz” (Es decir, que brillan por si solos). Es la palabra SHINE (Brillante) con dos “E” al final para dar este significado de personas que reciben y emanan luz.',
            'groupType' => 1,
            'memberNumber' => 5,
            'agency' => 'SM Entretaiment',
            'dateOfDebut' => '2008-05-25',
            'fansite' => 'http://shinee.smtown.com/Intro',
            'fandom' => 'Shawol',
            'song1' => 'Tell me what to do',
            'song2' => '1of1',
            'song3' => 'View',
            'groupPhotoPath' => '..\assets\images\Images\shinee.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        
        DB::table('groups')->insert([
            'groupName' => 'Big Bang',
            'descpGroup'=> '¿Por qué "BIGBANG"?: Significa "Gran Explosión" en Español.',
            'groupType' => 1,
            'memberNumber' => 5,
            'agency' => 'YG Entretaiment',
            'dateOfDebut' => '2006-09-19',
            'fansite' => 'http://www.ygfamily.com/artist/main.asp?LANGDIV=K&ATYPE=2&ARTIDX=3',
            'fandom' => 'VIP',
            'song1' => 'FXXK IT',
            'song2' => 'BANG BANG BANG',
            'song3' => 'LOSER',
            'groupPhotoPath' => '..\assets\images\Images\bigbang.jpg',
            'timesFavorited' => 20,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('groups')->insert([
            'groupName' => 'Red Velvet',
            'descpGroup'=> '¿Por qué "Red Velvet"?: El nombre del grupo muestra la determinación de las integrantes al querer presentar música y presentaciones que sean coloridas y refinadas; Red por la seducción y energía vibrante del color rojo y Velvet por la suavidad y elegancia del terciopelo.',
            'groupType' => 2,
            'memberNumber' => 5,
            'agency' => 'SM Entretaiment',
            'dateOfDebut' => '2014-09-01',
            'fansite' => 'http://redvelvet.smtown.com/Intro',
            'fandom' => 'ReVeluv',
            'song1' => 'Rookie',
            'song2' => 'Dumb Dumb Dumb',
            'song3' => 'Ese money ese power',
            'groupPhotoPath' => '..\assets\images\Images\redvelvet.jpg',
            'timesFavorited' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('groups')->insert([
            'groupName' => 'BLACKPINK',
            'descpGroup'=> '¿Por qué ‬"BLACKPINK"?: Es una contradicción de la percepción común del color rosa. El rosa es usado en muchos casos para representar lo lindo, pero BLACKPINK quiere decir que "lo lindo no lo es todo". Además, simboliza que ellas son un equipo que engloba, no sólo la belleza, sino también un gran talento.',
            'groupType' => 2,
            'memberNumber' => 4,
            'agency' => 'YG Entretaiment',
            'dateOfDebut' => '2016-09-08',
            'fansite' => 'http://www.ygfamily.com/artist/main.asp?LANGDIV=K&ATYPE=2&ARTIDX=70',
            'fandom' => 'BLINK',
            'song1' => 'Playing with Fire',
            'song2' => 'Whistle',
            'song3' => 'BOOMBAYAH',
            'groupPhotoPath' => '..\assets\images\Images\blackpink.jpg',
            'timesFavorited' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('groups')->insert([
            'groupName' => 'BLACKPINK',
            'descpGroup'=> '¿Por qué "K.A.R.D"?: El nombre es un acrónimo de las palabras King, Ace, JokeR & HiDden.',
            'groupType' => 3,
            'memberNumber' => 4,
            'agency' => ' DSP Media',
            'dateOfDebut' => '2017-07-01',
            'fansite' => 'https://www.facebook.com/officialkard/',
            'fandom' => '-',
            'song1' => 'Oh NaNa',
            'song2' => 'Dont Recall',
            'song3' => 'RUMOR',
            'groupPhotoPath' => '..\assets\images\Images\kard.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
