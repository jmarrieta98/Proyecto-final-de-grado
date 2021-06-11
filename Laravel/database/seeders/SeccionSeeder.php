<?php

namespace Database\Seeders;

use App\Models\Seccion;
use Illuminate\Database\Seeder;

class SeccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seccion = new Seccion();
        $seccion->nombre = "Lobatos";
        $seccion->save();

        $seccion2 = new Seccion();
        $seccion2->nombre = "Troperos";
        $seccion2->save();

        $seccion3 = new Seccion();
        $seccion3->nombre = "Escultas";
        $seccion3->save();

        $seccion4 = new Seccion();
        $seccion4->nombre = "Rovers";
        $seccion4->save();

        $seccion5 = new Seccion();
        $seccion5->nombre = "Scouters";
        $seccion5->save();

    }
}
