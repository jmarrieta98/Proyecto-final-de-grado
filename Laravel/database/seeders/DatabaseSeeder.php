<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(CampamentoSeeder::class);
        $this->call(PreinscripciónSeeder::class);
        $this->call(AlmacenSeeder::class);
        $this->call(ObjetoSeeder::class);
        $this->call(SeccionSeeder::class);
        $this->call(TutorSeeder::class);
        $this->call(SocioSeeder::class);
    }
}
