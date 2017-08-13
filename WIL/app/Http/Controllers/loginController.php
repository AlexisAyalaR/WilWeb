<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function muestraUsuario(Request $req){

    	$usuario = $req->input('usuario');
    	$prueba -> name = 'Alexis';

    	$json = array(
    		'employees' => array(
        	array('firstName' => 'Alexis', 'lastName' => 'Ayala'),
        	array('firstName' => 'Paul', 'lastName' => 'Viruena')
    		)
    	);
    	
    	$paul = json_encode($json);
    	return $paul;
    }
}
