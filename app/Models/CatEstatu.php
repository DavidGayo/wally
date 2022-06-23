<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEstatu extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->hasMany('App/Models/cat_empleado');
    }

    public function proyecto(){
    	return $this->hasMany('App/Models/proyecto');
    }

    public function usuario(){
    	return $this->hasMany('App/Models/Users');
    }
}
