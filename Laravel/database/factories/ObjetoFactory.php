<?php

namespace Database\Factories;

use App\Models\Objeto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ObjetoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Objeto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();
        return [
            'nombre' => $name,
            'slug' => Str::slug($name,'-'),
            'descripcion' => $this->faker->paragraph(),
            'almacen_id' => $this->faker->numberBetween(1,10)
        ];
    }
}
