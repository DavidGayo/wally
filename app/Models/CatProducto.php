<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatProducto extends Model
{
    use HasFactory;

    public function gasto(){
    	return $this->hasMany('App/Models/gastos_proyecto');
    }

    public function usuario(){
    	return $this->belongsTo('App/Models/User');
    }
}
