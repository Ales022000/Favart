<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombre_Usuario' => $this->faker->name(), 
            'Contraseña' => $this->faker->name(),
            'Fecha_Registro' => $this->faker->name(),
            'Email' => $this->faker->name(),
        ];
    }
}
