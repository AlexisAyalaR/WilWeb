<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function muestraUsuario(Request $req){

    	$usuario = $req->input('usuario');
    	return $usuario;
    }
}
