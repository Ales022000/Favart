<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id_Usuario', 
        'Nombre_Administrador',
    ];
    public function usuario(){
        return $this->hasOne(Usuario::class);
}
}