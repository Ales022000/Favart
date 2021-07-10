<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store()
    {
        $data = request () -> all();

        Usuario:: create($data);
    }
}
