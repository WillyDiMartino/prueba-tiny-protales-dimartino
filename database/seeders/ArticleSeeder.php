<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([

            'article_id' => 1,
            'title' => 'Horner quiere a Ricciardo cerca... por si acaso',
            'content' => 'El director de Red Bull elogia al australiano en el podcast F1 Nation y no cierra la puerta al piloto que acaban de bajar del RB: 
                        “Nunca se sabe”. Daniel Ricciardo corrió en Singapur su última carrera con Racing Bulls a los mandos del VCARB 01. El piloto australiano, ocho
                        veces ganador de un gran premio de F1, llegó a la escudería filial energética mediada la temporada 2023 para ocupar el asiento de Nyck De Vries, 
                        cuestionado por entonces por sus resultados. El neerlandés no había conseguido puntuar en los primeros diez grandes premios de aquella temporada 
                        y la dirección de la escudería decidió bajarle de un coche en el que se subieron Liam Lawson y Daniel Ricciardo. Un año después ha sido Daniel el 
                        perjudicado por los resultados, a pesar de sus 12 puntos (14º) en lo que va de temporada, diez menos que su compañero de equipo Yuki Tsunoda y los 
                        mismos que el Williams de Alexander Albon y cuatro más que el Alpine de Pierre Gasly. Liam Lawson cogerá otra vez el antiguo Alpha Tauri para acabar 
                        la temporada, si nada se tuerce. Porque el entorno de Red Bull no está viviendo últimamente momentos de paz. Tanto que Christian Horner, director de 
                        Red Bull, quiere al australiano disponible, por lo que pudiera pasar. Y no solo en Racing Bulls, sino también en el coche mayor. 
                        “Espero que se quede en el deporte. Hemos dejado muy claro que queremos que siga en el equipo en calidad de embajador”, dijo el británico en el 
                        podcast F1 Nation.',
            'release_date' => '2024-09-09',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
