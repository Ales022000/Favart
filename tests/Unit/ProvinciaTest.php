<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Provincia;
use Illuminate\Foundation\Testing\RefreshDatabase;


class ProvinciaTest extends TestCase
{
    use RefreshDatabase; 

    public function test_SeCreaProvincia()
    {
        $provincia = Provincia::factory()->create();
        
       $creado = $provincia->Crear_Provincia();

        $this->assertTrue($creado);
    }
}
