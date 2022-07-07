<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEstatu extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->hasMany('App\Models\CatEmpleado');
    }

    public function proyecto(){
    	return $this->hasMany('App\Models\Proyecto');
    }

    public function usuario(){
    	return $this->hasMany('App\Models\Users');
    }
}
