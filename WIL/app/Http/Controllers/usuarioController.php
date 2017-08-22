<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\usuario;
use App\horario;
use DB;

class usuarioController extends Controller
{

	public function registraUsuario(Request $req){

        
        //CARGA DROPDOWN
    	$email = $req->input('email');
        $nombre = $req->input('nombre');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	//$nivel = $_POST['nivel'];
        $nivel = 1;

    	if($pass != $passC)
    		return \Response::json(["miembro"=>false],500);
    	
    	else{
    		try{
    			usuario::agrega($email, $nombre, $pass, $nivel);
                $id = DB::table('usuarios')->where('email', $email)->value('id');
                horario::agrega($id); 
    		}catch(\Exception $e){
    			\Log::info('Error getInfo: '.$e);
    			return \Response::json(["aqui"=>false],500);
    		}
    	}

    	return \Response::json(["miembro"=>true],200);
    }

    public function eliminaUsuario(Request $req){

        //CARGA DROPDOWN
        $nombre = $_POST['alumnoE'];

        try{
            usuario::elimina($nombre);

        }catch(Exception $e){
            \Log::info('Error getInfo: '.$e);
            return \Response::json(["miembro"=>false],500);

        }
    }


    public function getInfo(){

    	return session('jsonMiembro');
    }



    public function cambiaHorario(Request $req){

        $matriz = $req->input('matriz');

        $arrayLunes = substr($matriz, 0, 51);
        $arrayMartes = substr($matriz, 52, 51);
        $arrayMiercoles = substr($matriz, 104, 51);
        $arrayJueves = substr($matriz, 156, 51);
        $arrayViernes = substr($matriz, 208, 51);
        
        $arrayLunes = "{" . $arrayLunes . "}";
        $arrayMartes = "{" . $arrayMartes . "}";
        $arrayMiercoles = "{" . $arrayMiercoles . "}";
        $arrayJueves = "{" . $arrayJueves . "}";
        $arrayViernes = "{" . $arrayViernes . "}";

        $usuario = session('jsonMiembro');

        $usuario_id = $usuario['id'];

        try{
            horario::modifica($usuario_id ,$arrayLunes, $arrayMartes, $arrayMiercoles, $arrayJueves, $arrayViernes);

        }catch(Exception $e){
            \Log::info('Error getInfo: '.$e);
            return \Response::json(["miembro"=>false],500);

        }

        return \Response::json(["miembro"=>true],200);
    }



    public function cambiaProgreso($id, $req){
  		
        //CARGA DROPDOWN
  		$nombre = $_POST['alumno'];
        $progreso = $_POST['progreso'];
    	DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update(['progreso' => $progreso]);
    }
}
