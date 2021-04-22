<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tienda;
use App\Models\User;
use Illuminate\Support\Str;

class TiendaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tienda::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->sentence();
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'resumen' => $this->faker->text(250),
            'website' => $this->faker->randomElement(['www.algo1.com','www.algo2.com', 'www.algo3.com']),
            'user_id' => User::all()->random()->id
        ];
    }
}
