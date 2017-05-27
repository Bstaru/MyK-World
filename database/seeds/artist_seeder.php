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
        DB::table('artists')->insert([
            'typeArtist' => 1,
            'idGroup' => 1,
            'artistName' => 'Chan Yeol',
            'artistFullName' => 'Park Chan Yeol',
            'agency' => 'SM Entretaiment',
            'height' => 1.87,
            'wheight' => 70,
            'biography' => 'Park Chan Yeol nació el 27 de noviembre de 1992 en Seúl, Corea del Sur. Asistió Hyundai High School en Apgujeong-dong, Seúl. Él tiene una hermana llamada Park Yoora, que es un locutor en la estación de radiodifusión MBC de Corea del Sur. Sus padres son dueños de un restaurante italiano Viva Polo en Seúl.',
            'bornPlace' => 'Seúl, Corea del Sur.',
            'artistbirthday' => '1992-11-27',
            'artistGender' => 1,
            'bloodType' => 'A',
            'songs' => null,
            'more' => 'Grupo K-pop: EXO
            Posición: Rapero principal, vocalista, bailarín y visual.
            Símbolo: Fuego.
            Educación:
            Secundaria Seul Gangnam-gu.
            Universidad Cibernética de KyungHee.
            Familia: Padres y una hermana mayor (Park Yoora, 3 años mayor).
            Entrenamiento: 4 años como aprendiz de SM (desde el 2008 al 2012).
            Numero favorito: 21.
            Idiomas : Coreano , Inglés (Medio) , Español (Básico), Japonés (Básico), Chino (Básico)
            Color favorito: Negro.
            MEJOR AMIGO: Baekhyun de exo 
            Amigos cercanos de EXO Sehun y Baekhyun
            Estilo favorito: Hip-Hop, Street, dubstep, rock.
            Flor favorita: Amapolas
            Religión: Cristiano.',
            'artistAvatarPath' => '..\assets\images\Images\chanyeol.png',
            'timesFavorited' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('artists')->insert([
            'typeArtist' => 1,
            'idGroup' => 1,
            'artistName' => 'D.O',
            'artistFullName' => 'Do Kyung Soo',
            'agency' => 'SM Entretaiment',
            'height' => 1.60,
            'wheight' => 60,
            'biography' => '-',
            'bornPlace' => 'Seúl, Corea del Sur.',
            'artistbirthday' => '1993-01-12',
            'artistGender' => 1,
            'bloodType' => 'A',
            'songs' => null,
            'more' => '-',
            'artistAvatarPath' => '..\assets\images\Images\do.png',
            'timesFavorited' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('artists')->insert([
            'typeArtist' => 1,
            'idGroup' => 2,
            'artistName' => 'Key',
            'artistFullName' => 'Kim Ki Bum',
            'agency' => 'SM Entretaiment',
            'height' => 1.81,
            'wheight' => 59,
            'biography' => 'Se unió a la SM Entertainment después de ganar el S.M. National Tour Audition Casting. Antes de debutar con SHINee, Key aparecido en un video Super Junior "Wonder Boy" como bailarin adicional. También es conocido por su talento en varios idiomas, como inglés y japonés. Pasó seis semanas en un intercambio en Estados Unidos y habla con fluidez inglés.',
            'bornPlace' => 'Daegu, Corea del Sur.',
            'artistbirthday' => '1991-09-23',
            'artistGender' => 1,
            'bloodType' => 'B',
            'songs' => null,
            'more' => 'Grupo Kpop: SHINee
            Posición: 2do Rapero, 4to Vocalista y 2do Bailarín.
            Sub Unidad: Toheart 
            Família: Padres.
            Nombre Fanclub Oficial: Lockets
            Religión: Cristiana.
            Hoobies: Escuchar música, bailar y hacer sky acuático.
            Comida favorita: Italiana.
            Mejores Amigos: Nam Woo Hyun de INFINITE y Soyou de SISTAR.
            Idiomas: Coreano (Fluido), Japones (Fluido), Ingles (Fluido), Chino (Basico).',
            'artistAvatarPath' => '..\assets\images\Images\key.png',
            'timesFavorited' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('artists')->insert([
            'typeArtist' => 2,
            'idGroup' => null,
            'artistName' => 'Park Bo Gum',
            'artistFullName' => 'Park Bo Gum',
            'agency' => 'Blossom Entertainment',
            'height' => 1.82,
            'wheight' => 65,
            'biography' => 'Con respecto a las noticias que se confirmaron de que Bo Geom se declaró en bancarrota su agencia confirmó: "Hubo quiebra pero en la actualidad, no hay ningún problema ", dijo. El actor no pudo pagar una deuda personal a finales de 2014, y el Tribunal Central de Seúl aceptó la solicitud de quiebra en marzo del año pasado. Con el arbitraje de la Corte los acreedores acordaron seis meses para los pagos terminando con la quiebra. Como ya no había razón de demanda no recibe ninguna sanción. La deuda del actor se produjo por un asunto menor en su familia por el cual el actor firmó como garantía de solidaridad (aval).',
            'bornPlace' => 'Seúl, Corea del Sur.',
            'artistbirthday' => '1993-01-12',
            'artistGender' => 1,
            'bloodType' => 'O',
            'songs' => null,
            'more' => 'Debut: 2011
            Educación:
            Seoul Mokdong Elementary School
            Seoul Mokdong Middle School
            Shinmok High School
            Myongji University (Departamento de Cine y Musicales)
            Familia: Padre, Hermano (9 años mayor) y Hermana (11 años mayor)
            Religión: Cristiana',
            'artistAvatarPath' => '..\assets\images\Images\bogum.jpg',
            'timesFavorited' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        DB::table('artists')->insert([
            'typeArtist' => 2,
            'idGroup' => null,
            'artistName' => 'Park Shin Hye',
            'artistFullName' => 'Park Shin Hye',
            'agency' => 'Blossom Entertainment',
            'height' => 1.68,
            'wheight' => 45,
            'biography' => 'Se le apoda Randy ShinHye porque su pose al abrir un partido de béisbol fue igual a la de Randy Johnson.',
            'bornPlace' => 'Seúl, Corea del Sur.',
            'artistbirthday' => '1993-01-12',
            'artistGender' => 2,
            'bloodType' => 'O',
            'songs' => null,
            'more' => 'Educación:
            Escuela Primaria: Hak Kang Elementary .
            Escuela Media: Young Pa Girls Middle School .
            Escuela Secundaria: Young Pa Girls High School .
            Universidad: Universidad Chung-Ang (Departamento de Teatro y Cine).
            Familia: Padres y un hermano mayor (Park Shin Won)
            Mejores amigos: Park Se Young y Yong Jun Hyung.
            Aficiones: Escuchar música y jugar béisbol.
            Religión: Cristiana.',
            'artistAvatarPath' => '..\assets\images\Images\shinhye.jpg',
            'timesFavorited' => 5,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('artists')->insert([
            'typeArtist' => 1,
            'idGroup' => 4,
            'artistName' => 'Kang Seul Gi',
            'artistFullName' => 'Seul Gi',
            'agency' => 'SM Entretaiment',
            'height' => 1.62,
            'wheight' => 42,
            'biography' => '-',
            'bornPlace' => 'Seúl, Corea del Sur.',
            'artistbirthday' => '1994-02-10',
            'artistGender' => 2,
            'bloodType' => 'A',
            'songs' => null,
            'more' => '-',
            'artistAvatarPath' => '..\assets\images\Images\seulgi.jpg',
            'timesFavorited' => 10,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
    }
}
