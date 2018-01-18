<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
      protected $table = 'registro_persona'; 
      protected $fillable = [
        'nombre', 'nombre2', 'apellido','apellido2',
    ];
}
