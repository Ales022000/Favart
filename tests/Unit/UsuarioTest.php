<?php

namespace Tests\Unit;

use tests\TestCase;
use App\Models\Usuario;
use Illuminiate\Support\Collection;
use Illuminate\Foundation\RefreshDatabase;
use Illuminate\Database\QuerryException;
use Illuminate\Database\Eloquent\Factories\Factory;


class UsuarioTest extends TestCase
{
    use RefreshDatabase; 

    public function test_Se_Crea_Usuario()
    {
        $usuario = Usuario::factory() -> create();

        $creado = $usuario -> Crear_Usuario();

        $this->assertTrue($creado);
    }
}
