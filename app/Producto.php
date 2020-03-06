<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public $table = 'productos';
    public $guarded = [];


    public function compraProd(){
       return $this->belongsToMany("App\User", "compras", "producto_id", "usuario_id");
     }

     public function dueño(){
         return $this->belongsTo('App\User', 'productos', 'usuario_id');
     }
}
