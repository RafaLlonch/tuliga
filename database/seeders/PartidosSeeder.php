<?php

namespace Database\Seeders;

use App\Models\Partido;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partido1 = new Partido();

        $partido1->id_equipo1 = 1;
        $partido1->id_equipo2 = 18;  
        $partido1->dia = "15/3/2022";
        $partido1->hora = "18:00";
        $partido1->resultado = "2-2";

        $partido1->save();

        $partido2 = new Partido();

        $partido2->id_equipo1 = 3;
        $partido2->id_equipo2 = 12;  
        $partido2->dia = "15/3/2022";
        $partido2->hora = "19:00";
        $partido2->resultado = "5-3";

        $partido2->save();

        $partido3 = new Partido();

        $partido3->id_equipo1 = 4;
        $partido3->id_equipo2 = 1;  
        $partido3->dia = "13/3/2022";
        $partido3->hora = "18:00";
        $partido3->resultado = "1-0";

        $partido3->save();

        $partido4 = new Partido();

        $partido4->id_equipo1 = 3;
        $partido4->id_equipo2 = 20;  
        $partido4->dia = "20/3/2022";
        $partido4->hora = "18:00";
        $partido4->resultado = "No disputado";

        $partido4->save();

        $partido5 = new Partido();

        $partido5->id_equipo1 = 5;
        $partido5->id_equipo2 = 2;  
        $partido5->dia = "3/3/2022";
        $partido5->hora = "18:00";
        $partido5->resultado = "No disputado";

        $partido5->save();

        $partido6 = new Partido();

        $partido6->id_equipo1 = 2;
        $partido6->id_equipo2 = 7;  
        $partido6->dia = "6/3/2022";
        $partido6->hora = "18:00";
        $partido6->resultado = "No disputado";

        $partido6->save();
    }
}
