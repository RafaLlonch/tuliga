<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Equipo;

class EquipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $equipo1 = new Equipo();

        $equipo1->nombre_equipo = "Fútbol Club Barcelona";
        $equipo1->entrenador = "Xavi ";
        $equipo1->presidente = "Joan Laporta";
        $equipo1->anio_fundacion = "1899";
        $equipo1->localidad = "Barcelona";
        $equipo1->provincia = "Barcelona";
        $equipo1->campo = "Camp Nou";

        $equipo1->save();

        $equipo2 = new Equipo();

        $equipo2->nombre_equipo = "Sevilla Fútbol Club";
        $equipo2->entrenador = "Julen Lopetegui";
        $equipo2->presidente = "José Castro Carmona";
        $equipo2->anio_fundacion = "1890";
        $equipo2->localidad = "Sevilla";
        $equipo2->provincia = "Sevilla";
        $equipo2->campo = "Ramón Sanchez-Pizjuán";

        $equipo2->save();

        $equipo3 = new Equipo();

        $equipo3->nombre_equipo = "Real Betis Balonpié";
        $equipo3->entrenador = "Manuel Pellegrini";
        $equipo3->presidente = "Angel Haro";
        $equipo3->anio_fundacion = "1907";
        $equipo3->localidad = "Sevilla";
        $equipo3->provincia = "Sevilla";
        $equipo3->campo = "Benito Villamarín";

        $equipo3->save();

        $equipo4 = new Equipo();

        $equipo4->nombre_equipo = "Athletic Club";
        $equipo4->entrenador = "Marcelino García Toral";
        $equipo4->presidente = "Aitor Elizegi";
        $equipo4->anio_fundacion = "1898";
        $equipo4->localidad = "Bilbao";
        $equipo4->provincia = "Vizcaya";
        $equipo4->campo = "San Mamés";

        $equipo4->save();

        $equipo5 = new Equipo();

        $equipo5->nombre_equipo = "Real Sociedad de Fútbol";
        $equipo5->entrenador = "Imanol Alguacil";
        $equipo5->presidente = "Jokin Aperribay";
        $equipo5->anio_fundacion = "1909";
        $equipo5->localidad = "San Sebastián";
        $equipo5->provincia = "Guipúzcoa";
        $equipo5->campo = "Reale Arena";

        $equipo5->save();

        $equipo6 = new Equipo();

        $equipo6->nombre_equipo = "Rayo Vallecano";
        $equipo6->entrenador = "Andoni Iraola";
        $equipo6->presidente = "Raúl Martín Presa";
        $equipo6->anio_fundacion = "1924";
        $equipo6->localidad = "Madrid";
        $equipo6->provincia = "Madrid";
        $equipo6->campo = "Campo de Fútbol de Vallecas";

        $equipo6->save();

        $equipo7 = new Equipo();

        $equipo7->nombre_equipo = "Villarreal Club de Fútbol";
        $equipo7->entrenador = "Unai Emery";
        $equipo7->presidente = "Fernando Roig Alfonso";
        $equipo7->anio_fundacion = "1923";
        $equipo7->localidad = "Villarreal";
        $equipo7->provincia = "Castellón";
        $equipo7->campo = "Estadio de la Cerámica";

        $equipo7->save();

        $equipo8 = new Equipo();

        $equipo8->nombre_equipo = "Real Club Deportivo Mallorca";
        $equipo8->entrenador = "Luis García Plaza";
        $equipo8->presidente = "Andy Kohlberg";
        $equipo8->anio_fundacion = "1916";
        $equipo8->localidad = "Mallorca";
        $equipo8->provincia = "Islas Baleares";
        $equipo8->campo = "Estadi de Son Moix";

        $equipo8->save();

        $equipo9 = new Equipo();

        $equipo9->nombre_equipo = "RCD Espanyol Barcelona";
        $equipo9->entrenador = "Vicente Moreno Peris";
        $equipo9->presidente = "Roger Guasch";
        $equipo9->anio_fundacion = "1900";
        $equipo9->localidad = "Barcelona";
        $equipo9->provincia = "Barcelona";
        $equipo9->campo = "RCDE Stadium";

        $equipo9->save();

        $equipo10 = new Equipo();

        $equipo10->nombre_equipo = "Granada Club de Fútbol";
        $equipo10->entrenador = "Robert Moreno";
        $equipo10->presidente = "Renato Yi";
        $equipo10->anio_fundacion = "1931";
        $equipo10->localidad = "Granada";
        $equipo10->provincia = "Granada";
        $equipo10->campo = "Nuevo Estadio de Los Cármenes";

        $equipo10->save();

        $equipo11 = new Equipo();

        $equipo11->nombre_equipo = "Real Club Celta de Vigo";
        $equipo11->entrenador = "Eduardo Coudet";
        $equipo11->presidente = "Carlos Mouriño";
        $equipo11->anio_fundacion = "1923";
        $equipo11->localidad = "Vigo";
        $equipo11->provincia = "Pontevedra";
        $equipo11->campo = "Estadio de Balaídos";

        $equipo11->save();

        $equipo12 = new Equipo();

        $equipo12->nombre_equipo = "Levante Unión Deportiva";
        $equipo12->entrenador = "Alessio Lisci";
        $equipo12->presidente = "Quico Catalán";
        $equipo12->anio_fundacion = "1909";
        $equipo12->localidad = "Valencia";
        $equipo12->provincia = "Valencia";
        $equipo12->campo = "Estadio Ciudad de Valencia - Levante UD";

        $equipo12->save();

        $equipo13 = new Equipo();

        $equipo13->nombre_equipo = "Getafe Club de Fútbol";
        $equipo13->entrenador = "Quique Sánchez Flores";
        $equipo13->presidente = "Ángel Torres Sánchez";
        $equipo13->anio_fundacion = "1998";
        $equipo13->localidad = "Getafe";
        $equipo13->provincia = "Madrid";
        $equipo13->campo = "Coliseum Alfonso Pérez";

        $equipo13->save();

        $equipo14 = new Equipo();

        $equipo14->nombre_equipo = "Cádiz Club de Fútbol";
        $equipo14->entrenador = "Sergio González";
        $equipo14->presidente = "Manuel Vizcaíno";
        $equipo14->anio_fundacion = "1910";
        $equipo14->localidad = "Cádiz";
        $equipo14->provincia = "Cádiz";
        $equipo14->campo = "Estadio Nuevo Mirandilla";

        $equipo14->save();

        $equipo15 = new Equipo();

        $equipo15->nombre_equipo = "Deportivo Alavés";
        $equipo15->entrenador = "Javier Calleja Revilla";
        $equipo15->presidente = "Alfonso Fernández de Trocóniz";
        $equipo15->anio_fundacion = "1921";
        $equipo15->localidad = "Vitoria";
        $equipo15->provincia = "Álava";
        $equipo15->campo = "Estadio de Mendizorroza";

        $equipo15->save();

        $equipo16 = new Equipo();

        $equipo16->nombre_equipo = "Real Valladolid Club de Fútbol";
        $equipo16->entrenador = "José Rojo Martín";
        $equipo16->presidente = " Ronaldo";
        $equipo16->anio_fundacion = "1928";
        $equipo16->localidad = "Valladolid";
        $equipo16->provincia = "Castilla y León";
        $equipo16->campo = "Estadio José Zorrilla";

        $equipo16->save();

        $equipo17 = new Equipo();

        $equipo17->nombre_equipo = "Club Deportivo Leganés";
        $equipo17->entrenador = "Mehdi Nafti";
        $equipo17->presidente = "María Victoria Pavó";
        $equipo17->anio_fundacion = "1928";
        $equipo17->localidad = "Leganés";
        $equipo17->provincia = "Madrid";
        $equipo17->campo = "Estadio Municipal Butarque";

        $equipo17->save();

        $equipo18 = new Equipo();

        $equipo18->nombre_equipo = "Real Madrid";
        $equipo18->entrenador = "Carlo Ancelotti";
        $equipo18->presidente = "Florentino Perez";
        $equipo18->anio_fundacion = "1902";
        $equipo18->localidad = "Madrid";
        $equipo18->provincia = "Madrid";
        $equipo18->campo = "Estadio Santiago Bernabéu";

        $equipo18->save();

        $equipo19 = new Equipo();

        $equipo19->nombre_equipo = "Club Atlético de Madrid";
        $equipo19->entrenador = "Diego Simeone";
        $equipo19->presidente = "Enrique Cerezo";
        $equipo19->anio_fundacion = "1903";
        $equipo19->localidad = "Madrid";
        $equipo19->provincia = "Madrid";
        $equipo19->campo = "Wanda Metropolitano";

        $equipo19->save();

        $equipo20 = new Equipo();

        $equipo20->nombre_equipo = "Valencia Clud de Fútbol";
        $equipo20->entrenador = "José Bordalás";
        $equipo20->presidente = "Anil Murthy";
        $equipo20->anio_fundacion = "1919";
        $equipo20->localidad = "Valencia";
        $equipo20->provincia = "Valencia";
        $equipo20->campo = "Estadio de Mestalla Valencia CF";

        $equipo20->save();
    }
}
