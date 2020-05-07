<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

	 //indico campos que puedo editar
    protected $fillable = [
        'localidad', 
    ];


    //una  localizacion pertenece a un perfil, permite localizar un profile atraves de location
    public function profile()
    {
    	return $this->belongsTo(Profile::class);
    }
}
