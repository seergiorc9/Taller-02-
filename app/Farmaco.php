<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmaco extends Model
{
    protected $table = 'farmacos';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nombre', 'precio', 'descripcion',
    ];

    public function farmaco() {
        return $this->hasMany(Receta::class, 'id_farmaco');
        }
}