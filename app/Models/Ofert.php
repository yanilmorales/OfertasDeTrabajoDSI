<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Ofert extends Model
{
    public $timestamps = false;

    public $fillable = [
        "nempresa",
        "expiracion",    
        "ubicacion",    
        "moneda",    
        "salario",    
        "aempresa",    
        "npuesto",    
        "contrato",    
        "experiencia",    
        "sexo",    
        "edad",   
        "vehiculo",    
        "pais",    
        "departamento",    
        "descripcion"
    ];
    
    public $dates = ['expiracion'];

}
