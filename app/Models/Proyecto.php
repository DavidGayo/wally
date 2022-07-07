<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->hasMany('App\Models\EmpleadosProyecto');
    }

    public function gasto(){
    	return $this->hasMany('App\Models\GastosProyecto');
    }

    public function estatus(){
    	return $this->belongsTo('App\Models\CatEstatu');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User');
    }
}
