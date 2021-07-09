<?php

namespace Tests\Unit;

use test\TestCase;
use App\Models\Usuario;
use Illuminiate\Support\Collection;
use Illuminate\Foundation\RefreshDatabase;
use Illuminate\Database\QuerryException;
use Illuminate\Database\Eloquent\Factories\Factory;


class ProvinciaTest extends TestCase
{
    use RefreshDatabase; 

    public function test_Se_Crea_Provincia()
    {
        $provincia = Provincia::factory() -> create();

        $creado = $provincia -> Crear_Provincia();

        $this->assertTrue($creado);
    }
}
