<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\usuario;

class registraController extends Controller
{
    public function registraUsuario(Request $req){

        
    	$email = $req->input('email');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $req->input('nivel');

    	if($pass != $passC)
    		return \Response::json(["miembro"=>false],500);
    	
    	else
    		usuario::agrega($email, $pass, $nivel); 

    	/*if insert si funciona*/
    	return \Response::json(["miembro"=>true],200);
    }
}

