<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatEmpleado extends Model
{
    use HasFactory;

    public function proyecto(){
    	return $this->hasMany('App\Models\EmpleadosProyecto');
    }

    public function estatus(){
    	return $this->belongsTo('App\Models\CatEstatu');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User', 'usuario_creo_id');
    }
}
