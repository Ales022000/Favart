<?php

namespace Tests\Feature;

use App\Models\Canton;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CantonTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_Se_Crea_Canton()
    {
        $this -> withoutExceptionHandLing();

        $data = [
            'id'=>'1',
            'Id_Provincia' => '1',
            'Nombre' => 'Liberia',
        ];

        $resp = $this->post('/cantones', $data);
        
        $this->assertDatabaseCount('cantones',1);

        $this->assertDatabaseHas('cantones', $data);
      
    }
}
