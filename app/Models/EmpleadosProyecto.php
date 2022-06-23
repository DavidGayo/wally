<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpleadosProyecto extends Model
{
    use HasFactory;

    public function empleado(){
    	return $this->belongsTo('App/Models/cat_emplado');
    }

    public function empleo(){
    	return $this->belongsTo('App/Model/scat_empleo');
    }

    public function proyecto(){
    	return $this->belongsTo('App/Model/sproyecto');
    }

    public function usuario(){
    	return $this->belongsTo('App/Models/User');
    }
}
