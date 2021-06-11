<?php

namespace Database\Factories;

use App\Models\Tutor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TutorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tutor::class;

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
            'slug' => Str::slug($name, '-'),
            'apellidos' => $this->faker->lastName,
            'dni' => $this->faker->randomNumber(8).$this->faker->randomLetter,
            'telefono' => $this->faker->phoneNumber
        ];
    }
}
