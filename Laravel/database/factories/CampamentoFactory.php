<?php

namespace Database\Factories;

use App\Models\Campamento;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CampamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campamento::class;

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
            'fecha' => $this->faker->date(),
            'lugar' => $this->faker->city
        ];
    }
}
