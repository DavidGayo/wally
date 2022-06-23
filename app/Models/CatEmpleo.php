<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEmpleo extends Model
{
    use HasFactory;

    public function proyecto(){
    	return $this->hasMany('App/Models/empleados_proyecto');
    }

     public function usuario(){
    	return $this->belongsTo('App/Models/User');
    }
}
