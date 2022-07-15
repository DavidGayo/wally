<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CatEmpleado extends Model
{
    use HasFactory;

    public function proyecto(){
    	return $this->hasMany('App\Models\EmpleadosProyecto');
    }

    public function estatus(){
    	return $this->belongsTo('App\Models\CatEstatu', 'estatus_id');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User', 'usuario_creo_id');
    }

    public function proyectos($id){
        $proyecto = DB::select('SELECT ep.id, p.nombre_proyecto,  ce.nombre_empleo, ep.precio_hora, ep.horas, ep.dias, ep.total FROM cat_empleados AS e
        JOIN empleados_proyectos AS ep ON e.id = ep.empleado_id
        JOIN proyectos AS p ON ep.proyecto_id = p.id
        JOIN cat_empleos AS ce ON ep.empleo_id = ce.id
        where e.id = '.$id);
    
    return  $proyecto;
 }
    
}
