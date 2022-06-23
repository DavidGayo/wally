<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function estatus(){
        return $this->belongsTo('App/Models/cat_estatu');
    }

    public function empleado(){
        return $this->hasMany('App/Models/cat_empleado');
    }

    public function empleo(){
        return $this->hasMany('App/Models/cat_empleo');
    }

    public function producto(){
        return $this->hasMany('App/Models/cat_producto');
    }

    public function empleados_proyecto(){
        return $this->hasMany('App/Models/empleados_proyecto');
    }

    public function gastos_proyecto(){
        return $this->hasMany('App/Models/gastos_proyecto');
    }

    public function proyecto(){
        return $this->hasMany('App/Models/proyecto');
    }
}
