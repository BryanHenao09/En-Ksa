<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\ModeloCiudad;
use App\ModeloDepartamento;
use Illuminate\Databse\Query\Builder;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        $departamentos=ModeloDepartamento::OrderBy('nombreDep')->paginate(32);
        $ciudades=ModeloCiudad::OrderBy('nombreCiudad')->paginate(25);
        return view('auth.register',compact('ciudades','departamentos'));
    }


    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombre' => 'required|string|max:255',
            'apellidos' => 'required|string',
            'id' => 'required|numeric|unique:users',
            'telefono' => 'required|numeric|unique:users',
            'fecha' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'ciudad' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nombre' => $data['nombre'],
            'apellidos' => $data['apellidos'],
            'email' => $data['email'],
            'id' => $data['id'],
            'telefono' => $data['telefono'],
            'fechaNacimiento' => $data['fecha'],
            'password' => bcrypt($data['password']),
            'Usuario_idUsuario' => $data['usuario'],
            'ciudad_id' => $data['ciudad'],
        ]);
    }
}
