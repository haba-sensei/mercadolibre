<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        //ok aca uso el soporte de Str de iluminate en la linea 7 para crear un slug
        //luego almaceno en una variable unica de 20 palabras el metodo faker para ambas tablas

       $name =  $this->faker->unique()->word(20);
        return [
          'name' => $name,
          'slug' => Str::slug($name),
          'cat_img' => 'category/' . $this->faker->image('public/storage/category', 1170, 245, null, false)
        ];
    }
}
