<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class cruceros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("cruceros")->insert([
            "nombre" => "MSC Armonia",
            "fecha_inicio" => "2022/01/01",
            "fecha_fin" => "2022/01/6",
            "puerto_origen" => "Brindisi/Lecce, Italia",
            "puerto_fin" => "Brindisi/Lecce, Italia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 669,
            "img_crucero" => "armonia.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Lirica",
            "fecha_inicio" => "2022/02/02",
            "fecha_fin" => "2022/02/7",
            "puerto_origen" => "Pireo/Grecia",
            "puerto_fin" => "Pireo/Grecia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 669,
            "img_crucero" => "lirica.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Meraviglia",
            "fecha_inicio" => "2022/03/03",
            "fecha_fin" => "2022/03/8",
            "puerto_origen" => "Génova, Italia",
            "puerto_fin" => "Génova, Italia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 880,
            "img_crucero" => "meraviglia.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Seaview",
            "fecha_inicio" => "2022/04/04",
            "fecha_fin" => "2022/04/9",
            "puerto_origen" => "Nápoles, Italia",
            "puerto_fin" => "Nápoles, Italia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 900,
            "img_crucero" => "seaview.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Seaside",
            "fecha_inicio" => "2022/05/05",
            "fecha_fin" => "2022/05/10",
            "puerto_origen" => "Palermo, Italia",
            "puerto_fin" => "Palermo, Italia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 600,
            "img_crucero" => "seaside.jpg"
        ]);

        DB::table("cruceros")->insert([
            "nombre" => "MSC Splendida",
            "fecha_inicio" => "2022/06/06",
            "fecha_fin" => "2022/06/11",
            "puerto_origen" => "Siracusa, Italia",
            "puerto_fin" => "Siracusa, Italia",
            "descripcion" => "Crucero por el Mediterráneo",
            "precio" => 669,
            "img_crucero" => "splendida.jpg"
        ]);
    }
}
