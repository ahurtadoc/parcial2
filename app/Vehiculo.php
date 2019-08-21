<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa',
        'marca_id',
        'duenno_id'
    ];

    public function duenno()
    {
        return $this->belongsTo('App\Duenno','duenno_id','id');
    }
    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id','id');
    }

}
