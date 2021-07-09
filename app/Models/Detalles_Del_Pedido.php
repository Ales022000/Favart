<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalles_Del_Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id_Producto', 
        'Resumen_Precio',
        'Cantidad',
    ];
    public function producto(){
        return $this->hasOne(Producto::class);
}
}
