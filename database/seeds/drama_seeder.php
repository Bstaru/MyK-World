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
        DB::table('dramas')->insert([
            'dramaName' => 'W',
            'emissionYear' => 2016,
            'numberOfEpisodes' => 16,
            'description' => 'h Yeon Joo (Han Hyo Joo) es una cirujana cardiotorácica en sus 30 cuyo padre se dedica a escribir el webtoon más famoso de Corea "W". El autor (Kim Eui Sung), harto ya del personaje de Kang Chul (Lee Jong Suk), decide que es hora de matarlo. Sin embargo, por sucesos inesperados, ella se traslada al mundo ficticio donde vive Kang Chul y lo salva. De ahí en adelante Oh Yeon Joo intentará averiguar qué sucede realmente para que ambos mundos se unan y por qué su padre está empeñado en matar al personaje principal de su obra.',
            'genre' => 'Drama, Suspenso, Romance, Comedia, Fantasía',
            'rating' => 7.8,
            'dramaPhotoPath' => '..\assets\images\Images\drama1.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('dramas')->insert([
            'dramaName' => 'Moon Lovers: Scarlet Heart Ryeo',
            'emissionYear' => 2016,
            'numberOfEpisodes' => 20,
            'description' => 'Wang So es el cuarto heredero del Emperador Taejo. Él no quiere estar en el centro de atención, pero nace de forma natural en la realeza. Su personalidad es tan fría como el hielo.',
            'genre' => 'Histórico, Fantasía, Romance, Drama,Comedia',
            'rating' => 7.8,
            'dramaPhotoPath' => '..\assets\images\Images\drama5.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('dramas')->insert([
            'dramaName' => 'The Legend of the Blue Sea',
            'emissionYear' => 2016,
            'numberOfEpisodes' => 20,
            'description' => 'Kim Dam Ryung (Lee Min Ho) es un noble erudito de la dinastía Joseon que por obra del destino conoce a Sae Wa (Jun Ji Hyun), una sirena cautiva cuyo destino es morir a manos de sus secuestradores. Kim Dam Ryung se vale de estrategias para rescatarla y devolverla al mar; sin saber que entre ellos dos existe un pasado que él no recuerda.
            Mucho tiempo después, luego de un suceso inesperado Sim Chung (Jun Ji Hyun) llega a tierra firme. Heo Joon Jae (Lee Min Ho) es un estafador de sangre fría quien se encuentra huyendo de las consecuencias de sus actos. Por causas del destino se encuentra con ella y comienzan sucesos que lo llevan a enamorarse poco a poco de la sirena.',
            'genre' => 'Drama, Suspenso, Romance, Comedia, Fantasía',
            'rating' => 7.8,
            'dramaPhotoPath' => '..\assets\images\Images\drama7.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

       DB::table('dramas')->insert([
            'dramaName' => 'You are Beautiful',
            'emissionYear' => 2009,
            'numberOfEpisodes' => 16,
            'description' => 'Go Mi Nyu es una inocente chica cuyo sueño es ser monja, ya que siempre ha vivido en un convento. Ella tiene un hermano gemelo llamado Go Mi Nam, cuyo sueño es ser cantante para poder conocer a su madre, ya que ambos fueron abandonados en un orfanato al morir su padre.',
            'genre' => 'Drama, Suspenso, Romance, Comedia, Fantasía',
            'rating' => 7.8,
            'dramaPhotoPath' => '..\assets\images\Images\drama2.jpg',
            'timesFavorited' => 0,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

    }
}
