<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = "employees";
    protected $primaryKey = "EmployeeId";
    public  $timestamps = false;

    //tratamiento de fechas 
    protected $dates = [
        'BirthDate', 'HireDate'
    ];

    //relación entre jefe y empleado

    public function subalternos() {
        return $this->hasMany('App\Empleado', 'ReportsTo');
    }
    //relación empleado-jefe

    public function jefe_directo() {
        return $this->belongsTo('App\Empleado', 'ReportsTo');
    }
    public function clientes() {
        return $this->hasMany('App\Customer', 'SupportRepId');
    }
}