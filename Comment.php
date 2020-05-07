<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
     public function commentable()
    {	//transformar a pero no especificamos a que
    	return $this->morphTo();
    }

    //un comentario pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
