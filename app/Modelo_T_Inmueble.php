<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo_T_Inmueble extends Model
{
    protected $table='tipoinmueble';
    protected $primaryKey='id_Tipo_Inmueb';
    public $timestamps=false;

    protected $fillable=[
    	'tipoInmueble',
    	'id_Tipo_Inmueb',
    ];
}
