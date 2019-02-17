@extends('layouts.app')

@section('content')

<div class="slider-title_box">
    <div class="row">
        <div class="col-md-12">
            <div class="slider-content_wrap">
                <h1>Descubre tu inmueble favorito</h1>
                <h5>Vamos a descubrir tu inmueble nuevo o usado, en venta o permuta</h5>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center">

        <div class="col-md-10" >

            <form  method="POST" action="{{Route('buscarInmueble')}}">

            @if($errors->count())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                               <li>{{$error}}</li>
                         @endforeach
                    </ul>
                </div>
            @endif

                {{csrf_field()}}

                <div class="btn-group" role="group" aria-label="Basic example" id="app" name="app">

                    <select  name="inmueble" id="inmueble" class="btn-group1" required>
                        <option value="">¿Tipo Inmueble?</option>
                            @if($tipoInmuebles->count())
                                @foreach($tipoInmuebles as $tipoInmueble)
                                    <option name="inmueble" id="inmueble" value="{{$tipoInmueble->id_Tipo_Inmueb}}">{{$tipoInmueble->tipoInmueble}}</option>
                                @endforeach
                            @else
                                <option>No hay registro</option>
                            @endif
                    </select>

                    <select name="vp" id="vp" class="btn-group2" required>
                            <option value="">¿En venta o Permuta?</option>
                            <option name="vp" id="vp" value="1">Venta</option>
                            <option name="vp" id="vp" value="2">Permuta</option>    
                    </select>

                    <select name="departamento" id="departamento" class="btn-group1" required>
                            <option value="">¿Departamento?</option>
                            @if($departamentos->count())
                                @foreach($departamentos as $departamento)
                                    <option name="departamento" id="departamento" value="{{$departamento->idDepartamento}}">{{$departamento->nombreDep}}</option>
                                @endforeach
                            @else
                                <option>No hay registro</option>
                            @endif
                    </select>

                    <select name="ciudad" id="ciudad" class="btn-group2">
                            <option >¿Municipio?</option>   
                        </select>



                    <button type="submit" class="btn-form"><span class="icon-magnifier search-icon"></span>BUSCAR<i class="pe-7s-angle-right"></i></button>


                </div>
            </form>
        </div>
    </div>
</div>

@endsection