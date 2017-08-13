<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function muestraUsuario(Request $req){

    	$usuario = $req->input('usuario');
    	//$prueba -> name = 'Alexis';

    	$json = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);

    	$paul = json_encode($json);
    	return $paul;
    }
}
