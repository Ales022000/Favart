<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CantonController extends Controller
{
    public function store()
    {
        $data = request () -> all();

        Canton:: create($data);
    }
}
