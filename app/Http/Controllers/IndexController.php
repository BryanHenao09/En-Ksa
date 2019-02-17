<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModeloDepartamento;
use App\Modelo_T_Inmueble;
use App\ModeloCiudad;
use Illuminate\Database\Query\Builder;
use App\Http\Requests\RequestInmueble;
use Illuminate\Support\Facades\Input;

class IndexController extends Controller
{
    public function index(){
    	$departamentos=ModeloDepartamento::OrderBy('nombreDep')->paginate(32);
		$tipoInmuebles=Modelo_T_Inmueble::OrderBy('tipoInmueble')->paginate(5);
	    return view('index',compact('departamentos','tipoInmuebles'));
    }

    public function buscarInmueble(Request $request){
    	dd($request->all());
    }

}
