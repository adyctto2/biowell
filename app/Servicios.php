<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    protected $fillable = [
        'nombre','descripcion', 'costo', 'imagen', 
      ];
}
