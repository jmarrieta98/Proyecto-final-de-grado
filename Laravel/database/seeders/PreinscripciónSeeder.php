<?php

namespace Database\Seeders;

use App\Models\Preinscripción;
use Illuminate\Database\Seeder;

class PreinscripciónSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Preinscripción::factory(50)->create();
    }
}
