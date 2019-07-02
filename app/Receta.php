<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
  protected $table = 'recetas';
  protected $primaryKey = 'id';
  protected $fillable = [
  'id_cliente', 'id_farmaco', 'comentario', 'total',
  ];
public function cliente() {
return $this->belongsTo(Cliente::class, 'id_cliente');
}
public function farmaco() {
return $this->belongsTo(Farmaco::class, 'id_farmaco');
}
}
