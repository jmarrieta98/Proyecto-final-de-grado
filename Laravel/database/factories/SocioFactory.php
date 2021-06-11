<?php

namespace Database\Factories;

use App\Models\Socio;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SocioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Socio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'dni' => $this->faker->randomNumber(8).$this->faker->randomLetter,
            'nombre' => $name,
            'slug' => Str::slug($name,'-'),
            'apellidos' => $this->faker->lastName,
            'nacimiento' => $this->faker->date(),
            'direccion' => $this->faker->streetAddress,
            'poblacion' => $this->faker->city,
            'telefono' => $this->faker->phoneNumber,
            'alergias' => $this->faker->paragraph(),
            'seccion' => $this->faker->numberBetween(1,5),
            'tutor' => $this->faker->numberBetween(1,50)
        ];
    }
}
