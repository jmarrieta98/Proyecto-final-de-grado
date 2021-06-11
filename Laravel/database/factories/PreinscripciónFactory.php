<?php

namespace Database\Factories;

use App\Models\Preinscripción;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PreinscripciónFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Preinscripción::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->firstName;
        return [
            'nombre' => $name,
            'slug' => Str::slug($name, '-'),
            'apellidos' => $this->faker->lastName,
            'fecha_nacimiento' => $this->faker->date(),
            'nombre_tutor' => $this->faker->name(),
            'telefono' => $this->faker->phoneNumber,
            'informacion' => $this->faker->paragraph()
        ];
    }
}
