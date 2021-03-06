<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Duenno extends Model
{
    protected $table = 'duennos';
    protected $id = 'id';
    protected $fillable = [
        'nombre',
        'cedula'
    ];

    public function vehiculo()
    {
        return $this->hasOne('App\Vehiculo','duenno_id','id');
    }
}
