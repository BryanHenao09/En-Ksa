<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

class ModeloCiudad extends Model
{
    protected $table='ciudad';
    protected $primaryKey='idCiudad';
    public $timestamps=false;

    protected $fillable=[
    	'nombreCiudad',
    	'idCiudad',
    ];

    public static function obtenerCiudades($id){
    	return ModeloCiudad::OrderBy('nombreCiudad')->where('departamento_id','=',$id)->get();
    }
}	
