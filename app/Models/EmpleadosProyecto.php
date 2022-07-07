<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosProyecto extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->belongsTo('App\Models\CatEmplado');
    }

    public function empleo(){
    	return $this->belongsTo('App\Model\CatEmpleo');
    }

    public function proyecto(){
    	return $this->belongsTo('App\Model\Proyecto');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User');
    }
}
