@extends('layouts.app')

@section('content')
<head>
    <title>INICIO SESIÓN</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/img-01.jpg');">
            <div class=" p-t-190 p-b-30">

                <div class="login100-form-avatar">
                    <img src="images/avatar-01.jpg" alt="AVATAR">
                </div>


                    <span style="color:#17202A"  class="login100-form-title p-t-20 p-b-45">
                        Inicio de Sesión
                    </span>

                <form class="login100-form validate-form"  method="POST" action="{{ Route('login') }}">

                    {{csrf_field()}}

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Correo Electronico requerido">
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input class="input100" type="text" name="email" id="email" placeholder="Correo Electronico" value="{{old('email')}}">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <div class="alert alert-danger">
                                <strong>{{ $errors->first('email') }}</strong>
                            </div>
                        </span>
                    @endif

                    <div class="wrap-input100 validate-input m-b-10" data-validate = "Contraseña requerida">
                        <div class="form-group{{ $errors->has('password') ? 'has-error' : '' }}">
                            <input class="input100" type="password" name="password" id="password" placeholder="Contraseña">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>
                    </div>
                    @if($errors->has('password'))
                        <span class="help-block">
                            <strong>{{$errors->first('password')}}</strong>
                        </span>
                    @endif


                    <div class="container-login100-form-btn p-t-10">
                        <button type="submit" class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center w-full p-t-25 p-b-230">
                            <a style="color:#CB4335" href="#" class="txt1 ">
                                Forgot Password?
                            </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    

    
<!--===============================================================================================-->  
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
@endsection
