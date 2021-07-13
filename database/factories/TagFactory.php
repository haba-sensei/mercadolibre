<?php

namespace Database\Factories;

use App\Models\Category;
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

        // 'tag_img' => 'tags/' . $this->faker->image('public/storage/tags', 150, 150, null, false),
        $name_tag = $this->faker->randomElement(['regalos', 'detalles', 'tendencias', 'variados', 'tazas', 'enamorate']);
        return [
            'name' => $name_tag,
            'slug' => Str::slug($name_tag),
            'color' => $this->faker->randomElement(['red', 'yellow', 'blue', 'indigo', 'purple', 'pink']),
            'tag_img' => 'tags/'.$this->faker->randomElement(['tag_img1.jpg', 'tag_img2.jpg', 'tag_img3.jpg', 'tag_img4.jpg', 'tag_img5.jpg', 'tag_img6.jpg']),
            'category_id' => Category::all()->random()->id
        ];
    }
}
