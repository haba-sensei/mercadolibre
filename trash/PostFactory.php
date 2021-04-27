<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //ok aca uso el soporte de Str de iluminate en la linea 7 para crear un slug
        //luego almaceno en una variable unica de 20 palabras el metodo faker para ambas tablas

        $name = $this->faker->unique()->sentence();

        return [
           'name' => $name,
           'slug' => Str::slug($name),
           'extract' => $this->faker->text(250),
           'body' => $this->faker->text(2000),
           'status' => $this->faker->randomElement([1,2]),
           'category_id' => Category::all()->random()->id,
           'user_id' => User::all()->random()->id

        ]; 
    }
}
