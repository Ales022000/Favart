<?php

namespace Database\Factories;

use App\Models\Canton;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CantonFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Canton::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Id_Provincia' => Provincia::factory() -> create(),
            'Nombre' => $this -> faker->name(), 
        ];
    }
}
