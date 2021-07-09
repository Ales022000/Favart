<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito_de_Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'Resumen_Precio', 
        'Cantidad',
    ];
}