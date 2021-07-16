<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;


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
            'Fecha_Registro' => $this->faker->date(),
            'Email' => $this->faker->email(),
        ];
    }
}
