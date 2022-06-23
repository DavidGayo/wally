<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->hasMany('App/Models/empleados_proyecto');
    }

    public function gasto(){
    	return $this->hasMany('App/Models/gastos_proyecto');
    }

    public function estatus(){
    	return $this->belongsTo('App/Models/cat_estatu');
    }

    public function usuario(){
    	return $this->belongsTo('App/Models/User');
    }
}
