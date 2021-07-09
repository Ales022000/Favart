<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id_Provincia', 
        'Id_Canton', 
        'Nombre',
    ];
    public function canton(){
        return $this->hasOne(Canton::class);
}
}
