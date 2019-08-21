<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $fillable = [
        'nombre'
    ];

    public function vehiculo()
    {
        return $this->hasOne('App\Vehiculo','marca_id','id');
    }
}
