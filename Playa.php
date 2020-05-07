<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playa extends Model
{
    //indico campos que puedo editar
    protected $fillable = [
        'nombre', 'fondo', 'picos', 'mejor_marea', 'oleaje_medio',
    ];
}
