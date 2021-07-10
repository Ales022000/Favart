<?php

namespace Database\Factories;

use App\Models\Distrito;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\QueryException;

class DistritoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Distrito::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Id_Provincia' => Provincia::factory() -> create(),
            'Id_Canton' => Canton::factory() -> create(),
            'Nombre' => $this -> faker->name(), 
        ];
    }
}
