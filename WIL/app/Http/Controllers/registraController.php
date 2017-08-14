<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;

class registraController extends Controller
{
    public function registraUsuario(Request $req){

    	$email = $req->input('email');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $req->input('nivel');


    	$data = Input::except(array('token'));

    	$regla = array(
    		'email' => 'required|email',
    		'pass' => 'required|min:6',
    		'passC' => 'required|same:pass',
    		'nivel' => 'required'
    		);

    	$mensaje = array(
    		'passC.required' => 'Se necesita que las contraseñas sean iguales',
    		'passC.min' => 'La contraseña tiene que ser mínimo de 6 caracteres',
    		'passC.same' => 'Tiene que ser la misma contraseña'
    		);

    	$validador = Validator::make($data, $regla, $mensaje);

    	if($validador->fails()){

    	} else{

    	}
    }
}

