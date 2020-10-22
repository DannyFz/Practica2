<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentarios extends Model
{
    protected $fillable = [
        'comentario', 'post_id'
        ];

    public function post(){

        return $this->belongsTo(post::class);
    }
}
