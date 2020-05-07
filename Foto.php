<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    //un video pertenece a un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //un video pertenece a un categoria
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    //un video tiene muchos comentarios
    public function comments()
    {
    	//especie de hasMany pero polimorfico
    	return $this->morphMany(Comment::class, 'commentable');
    }
	
	//un video tiene una imagen
    public function image()
    {
    	//polimorfismo a uno
    	return $this->morphOne(Image::class, 'imageable');
    }

    //un video puede tener muchas etiquetas
    public function tags()
    {
    	return $this->morphToMany(Tag::class, 'taggable');
    }
}
