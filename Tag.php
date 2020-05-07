<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //una etiqueta tiene muchos posts
     public function posts()
    {
    	return $this->morphedByMany(Post::class, 'taggable');
    }

    //un video tiene muchos posts
    public function videos()
    {
    	return $this->morphedByMany(Video::class, 'taggable');
    }

    //un video tiene muchos posts
    public function fotos()
    {
    	return $this->morphedByMany(Foto::class, 'taggable');
    }
}
