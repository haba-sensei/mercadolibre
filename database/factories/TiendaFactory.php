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
        $name = $this->faker->unique()->company;
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'resumen' => $this->faker->text(250),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->e164PhoneNumber,
            'url_perfil' => 'tiendas/' . $this->faker->image('public/storage/tiendas', 300, 300, null, false),
            'status' => $this->faker->randomElement([1,2]),
            'user_id' => User::pluck('id')->unique()->random()
        ];
    }
}
