<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GastosProyecto extends Model
{
    use HasFactory;

    public function producto(){
    	return $this->belongsTo('App\Models\CatProducto');
    }

    public function proyecto(){
    	return $this->belongsTo('App\Models\Proyecto');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User');
    }

}
