<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;

    protected $fillable = [
        'Id_Provnicia', 
        'Nombre',
    ];
    public function provincia(){
        return $this->hasOne(Provincia::class);
}

}
