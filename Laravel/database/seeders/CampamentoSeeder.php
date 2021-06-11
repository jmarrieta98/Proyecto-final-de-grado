<?php

namespace Database\Seeders;

use App\Models\Campamento;
use Illuminate\Database\Seeder;

class CampamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campamento::factory(50)->create();
    }
}
