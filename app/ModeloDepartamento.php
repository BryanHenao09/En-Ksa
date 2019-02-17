<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloDepartamento extends Model
{
    protected $table='departamento';
    protected $primaryKey='idDepartamento';
    public $timestamps=false;

    protected $fillable=[
    	'nombreDep',
    	'idDepartamento',
    ];
}
