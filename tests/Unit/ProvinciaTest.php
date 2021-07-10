<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Provincia;
use Illuminate\Support\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Database\QueryException;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProvinciaTest extends TestCase
{
    use RefreshDatabase; 

    public function test_Se_Crea_Provincia()
    {
        $provincia = Provincia::factory() -> create();

        $creado = $provincia->Crear_Provincia();

        $this->assertTrue($creado);
    }
}
