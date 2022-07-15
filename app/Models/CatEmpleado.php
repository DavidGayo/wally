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
    	return $this->belongsTo('App\Models\CatEstatu', 'estatus_id');
    }

    public function usuario(){
    	return $this->belongsTo('App\Models\User', 'usuario_creo_id');
    }

    /*
        SELECT e.nombre_empleado, p.nombre_proyecto,  ce.nombre_empleo, ep.precio_hora, ep.horas, ep.dias, ep.total from cat_empleados as e
join empleados_proyectos as ep on e.id = ep.empleado_id
join proyectos as p on ep.proyecto_id = p.id
join cat_empleos as ce on ep.empleo_id = ce.id
where e.id = 1;
    */
}
