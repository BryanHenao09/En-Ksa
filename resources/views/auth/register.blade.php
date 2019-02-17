@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <title>FORMULARIO DE REGISTRO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/gif" href="animated_favicon1.gif">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts-registro/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts-registro/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor-registro/noui/nouislider.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css-registro/util.css">
    <link rel="stylesheet" type="text/css" href="css-registro/main.css">
<!--===============================================================================================-->
</head>
<body>

    <div class="">
        <div class="">
            <form class="contact100-form validate-form" method="POST" action="{{ route('register') }}"  role="form" id="formRegistro">

                <span class="contact100-form-title">
                    Formulario de registro
                </span>

                {{ csrf_field() }} 

                <div class="wrap-input100  bg1 rs1-wrap-input100 ">
                    <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <span class="label-input100">Nombre *</span>
                        <input class="input100" type="text" name="nombre" id="nombre" placeholder="Ingresa tu nombre" value="{{old('nombre')}}">

                        @if($errors->has('nombre'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nombre') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <div class="form-group{{ $errors->has('apellidos') ? ' has-error' : '' }}">
                        <span class="label-input100">Apellidos *</span>
                        <input class="input100" type="text" name="apellidos" id="apellidos" placeholder="Ingresa tu apellido " value="{{old('apellidos')}}">

                        @if($errors->has('apellidos'))
                            <span class="help-block">
                                <strong>{{$errors->first('apellidos')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100  bg1" >
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <span class="label-input100">Email *</span>
                        <input class="input100" type="text" name="email" id="email" placeholder="Ingrese tu email " value="{{old('email')}}" >

                        @if($errors->has('email'))
                            <span class="help-block">
                                <strong >{{$errors->first('email')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <div class="form-group{{ $errors->has('departamento') ? ' has-error' : '' }}">
                        <span class="label-input100">Departamento</span>
                        <div>
                            <select class="form-control" name="departamento" id="departamento" required>
                                <option value="">¿Departamento?</option>
                                @if($departamentos->count())
                                    @foreach($departamentos as $departamento)
                                        <option name="departamento" id="departamento" value="{{$departamento->idDepartamento}}">{{$departamento->nombreDep}}</option>
                                    @endforeach
                                @else
                                    <option>No hay registro</option>
                                @endif
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>   

                        @if($errors->has('departamento'))
                            <span class="help-block">
                                <strong>{{$errors->first('departamento')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                        <span class="label-input100">Ciudad Residencia *</span>
                        <div>
                            <select class="form-control" name="ciudad" id="ciudad" required>
                                <option value="">¿Ciudad donde reside?</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>


                        @if($errors->has('ciudad'))
                            <span class="help-block">
                                <strong>{{$errors->first('ciudad')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                 <div class="wrap-input100  bg1">
                    <div class="form-froup{{ $errors->has('id') ? ' has-error' : '' }}">    
                        <span class="label-input100">Documento de identificacion</span>
                        <input class="input100" type="text" name="id" id="id" placeholder="Ingrese tu numero de documento" value="{{old('id')}}">

                        @if($errors->has('id'))
                            <span class="help-block">
                                <strong>{{$errors->first('id')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="wrap-input100 bg1 rs1-wrap-input100">
                    <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                        <span class="label-input100">Phone</span>
                        <input class="input100" type="numeric" name="telefono" id="telefono" placeholder="Inrese tu numero de telefono" value="{{old('telefono')}}">
                        @if($errors->has('telefono'))
                            <span class="help-block">
                                <strong>{{$errors->first('telefono')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>


               
                <div class="wrap-input100 bg1  rs1-wrap-input100" >
                    <div class="form-group {{ $errors->has('fecha') ? 'has-error' : '' }}">
                        <span class="label-input100">Fecha nacimiento</span>
                        <input class="input100" type="date" name="fecha" id="fecha">

                        @if($errors->has('fecha'))
                            <span class="help-block">
                                <strong>{{$errors->first('fecha')}}</strong>
                            </span>
                        @endif  
                    </div>
                </div>

                <div class="wrap-input100  bg1" >
                    <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                        <span class="label-input100">Contraseña *</span>
                        <input class="input100" type="password" name="password" id="password" placeholder="****** ">

                        @if($errors->has('password'))
                            <span class="help-block">
                                <strong>{{$errors->first('password')}}</strong>
                            </span>
                        @endif      
                    </div>
                </div>


                <div style="display: none;">
                    <input type="text" name="usuario" id="usuario" value="2">
                </div>


                <div class="container-contact100-form-btn">
                    <button type="submit" class="contact100-form-btn">
                        <a>
                            Enviar formulario
                            <i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
                        </a>
                    </button>
                </div>
            </form>
            <br><br>
        </div>
    </div>


    <style type="text/css">
        span{
            color:#B03A2E;
        }
    </style>


<!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function(){
            $(this).select2({
                minimumResultsForSearch: 100,
                dropdownParent: $(this).next('.dropDownSelect2')
            });


            $(".js-select2").each(function(){
                $(this).on('select2:close', function (e){
                    if($(this).val() == "Please chooses") {
                        $('.js-show-service').slideUp();
                    }
                    else {
                        $('.js-show-service').slideUp();
                        $('.js-show-service').slideDown();
                    }
                });
            });
        })
    </script>
<!--===============================================================================================-->
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="vendor/noui/nouislider.min.js"></script>
    <script>
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 1500, 3900 ],
            connect: true,
            range: {
                'min': 1500,
                'max': 7500
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]);
            $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
            $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
        });
    </script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>



                
@endsection
