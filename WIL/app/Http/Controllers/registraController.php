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
    	$nivel = $req->input('nivel');

    	usuario::agrega($email, $pass, $nivel); 
    	
        
    }
}

