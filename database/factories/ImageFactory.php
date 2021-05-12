<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //dentro del metodo image tiene la url donde se almacenara luego
        // el width y el height luego la categoria pero ya no se descarga asi que queda null
        // luego hay 2 opciones la primera en true para guardar la url: public/storage/posts/imagen.jpg
        // luego esta false para que guarde la url asi image.jpg
        //pero no guardaremos asi si no que concateno todo el elemento a post/ AQUI <- antes de todo.
        // 'url' => 'products/' . $this->faker->image('public/storage/products', 640, 480, null, false),


        return [

        'url' => 'products/' . $this->faker->image('public/storage/products', 600, 600, null, false),

        ];
    }
}
