<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
  protected $fillable = [
  'post'
  ];
   public function coment() {

     return $this->hasMany(Comentarios::class);
     
   }

   protected $hidden = [
     'created_at', 'updated_at'
   ];

}
