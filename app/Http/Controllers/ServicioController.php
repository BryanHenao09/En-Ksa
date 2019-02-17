<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModeloDepartamento;
use App\ModeloCiudad;
use Illuminate\Database\Query\Builder;

class ServicioController extends Controller
{

    public function obtenerCiudad(Request $request, $id){
    	if($request->ajax()){
    		$ciudades=ModeloCiudad::obtenerCiudades($id);
    		return  response()->json($ciudades);
    	}
    }
}
