<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function muestraUsuario(Request $req){

    	$usuario = $req->input('usuario');
    	$prueba -> name = 'Alexis';
    	$paul = json_encode($prueba);
    	return $paul;
    }
}
