<?php

namespace Database\Seeders;

use App\Models\Objeto;
use Illuminate\Database\Seeder;

class ObjetoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Objeto::factory(200)->create();
    }
}
