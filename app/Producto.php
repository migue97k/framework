<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
      protected $table = 'productos';

	public function users(){
    	return $this->belongsTo('App\User','clienta_vende');
    }

    public function categori(){
    	return $this->belongsTo('App\Area','area_id');
    }
}
