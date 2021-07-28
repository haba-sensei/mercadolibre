<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\perfiles;
use App\Models\User;

class PerfilesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = perfiles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $order = 1;
        return [
            'pais' => $this->faker->country(),
            'estado' => $this->faker->state(),
            'ciudad' => $this->faker->city(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->e164PhoneNumber(),
            'user_id' => $order++
        ];
    }
}
