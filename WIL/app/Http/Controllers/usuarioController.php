<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\usuario;

class usuarioController extends Controller
{

	public function registraUsuario(Request $req){

        
    	$email = $req->input('email');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $req->input('nivel');

    	if($pass != $passC)
    		return \Response::json(["miembro"=>false],500);
    	
    	else{
    		try{
    			usuario::agrega($email, $pass, $nivel); 
    		}catch(\Exception $e){
    			\Log::info('Error getInfo: '.$e);
    			return \Response::json(["miembro"=>false],500);
    		}
    	}

    	return \Response::json(["miembro"=>true],200);
    }

    public function getInfo(){

    	return session('jsonMiembro');
    }

    public function cambiaHorario(Request $req){
    	/*
    	for ($i=1; $i <6 ; $i++) { 
    		for($j=1; j< 10; j++) {
    			$

    		}
    	}



    	for ($i=0; $i < ; $i++) { 
    		
    	}


    	$UnoSieteL = $req->input('17:00L');
        $UnoSieteL = $req->input('17:00L');


    	return $UnoSieteL;
    	*/
    }

    public function cambiaProgreso($id, $req){
  		
  		/*DROPDOWN*/
    	DB::table('users')
            ->where('id', $id)
            ->update(['progreso' => $req->input('progreso')]);
    }
}
