<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    public function users(){
    	return $this->belongsTo('App\User','comprador');
    }
    public function producto(){
    	return $this->belongsTo('App\Producto','producto_id');
    }
}
