<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string 
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //ok aca uso el soporte de Str de iluminate en la linea 7 para crear un slug 
        //luego almaceno en una variable unica de 20 palabras el metodo faker para ambas tablas 

        $name = $this->faker->unique()->word(20);
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'color' => $this->faker->randomElement(['red', 'yellow', 'blue', 'indigo', 'purple', 'pink'])
        ];
    }
}
