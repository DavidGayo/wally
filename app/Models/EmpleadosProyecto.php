<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosProyecto extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->belongsTo('App\Models\CatEmplado', 'empleado_id');
    }

    public function empleo(){
    	return $this->belongsTo('App\Model\CatEmpleo', 'empleo_id');
    }

    public function proyecto(){
    	return $this->belongsTo('App\Model\Proyecto', 'proyecto_id');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User', 'usuario_creo_id');
    }
}
