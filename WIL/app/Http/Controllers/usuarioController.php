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
        $nombre = $req->input('nombre');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $_POST['nivel'];

    	if($pass != $passC)
    		return \Response::json(["miembro"=>false],500);
    	
    	else{
    		try{
    			usuario::agrega($email, $nombre, $pass, $nivel);
                //DB que regresa id del usuario agregado
                horario::agrega($id); 
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

        $matriz = $req->input('matriz');

        return $matriz;
    }



    public function cambiaProgreso($id, $req){
  		
  		$nombre = $_POST['alumno'];
        $progreso = $_POST['progreso'];
    	DB::table('users')
            ->where('nombre', $nombre)
            ->update(['progreso' => $progreso]);
    }
}
