<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = [
    'nombre', 'nombreMascota',
    ];
    
    public function receta() {
    return $this->hasMany(Receta::class, 'id_cliente');
    }
}
