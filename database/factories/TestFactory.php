<?php

namespace Database\Factories;

use App\Models\Test;
use Illuminate\Database\Eloquent\Factories\Factory;

class TestFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Test::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Pedro', 'Emiliano', 'Alberto', 'Pablo', 'Francisco', 'Roberto', 'Enrique']),
            'apellido' => $this->faker->randomElement(['Perez', 'Guzmán', 'Rivera', 'Lopez']),
            'telefono' => $this->faker->randomElement(['9622162349']),
            'email' => $this->faker->randomElement(['contacto@unach.mx', 'info@unach.mx']),
            'direccion' => $this->faker->sentence()
        ];
    }
}
