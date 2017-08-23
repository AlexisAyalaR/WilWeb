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

    /* 
    * Funcion que se encarga de registrar un usuario desde PersonalS
    * Parametros: Request->POST
    * Return: json{miembro=boolean}
    */
	public function registraUsuario(Request $req){
        
        //CARGA DROPDOWN
    	$email = $req->input('email');
        $nombre = $req->input('nombre');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $_POST['nivel'];

    	if($pass != $passC)
    		return \Response::json(["miembro"=>false],500);
    	
    	else{
    		try{
    			$id = usuario::agrega($email, $nombre, $pass, $nivel);
                horario::agrega($id); 
    		}catch(\Exception $e){
    			\Log::info('Error getInfo: '.$e);
    			return \Response::json(["aqui"=>false],500);
    		}
    	}

    	return \Response::json(["miembro"=>true],200);
    }

    /* 
    * Funcion que se encarga de eliminar un usuario desde PersonalS
    * Parametros: Request->POST
    * Return: json{miembro=boolean}
    */
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

    /* 
    * Funcion que se encarga de dar entregar los datos de un usuario ya ingresado. 
    * Parametros: 
    * Return: json{usuario, horario}
    */
    public function getInfo(){

    	$usuario = session('jsonMiembro');

        $usuario_id = $usuario['id'];

        $horario = horario::getById($usuario_id);

        return \Response::json(["miembro"=>$usuario, "horario"=>$horario],200);

    }

    /* 
    * Funcion que se encarga de dar cambiar el horario del usuario ingresado. 
    * Parametros: Request->POST
    * Return: json{miembro=boolean}
    */
    public function cambiaHorario(Request $req){

        $matriz = $req->input('matriz');

        $arrayLunes = substr($matriz, 0, 51);
        $arrayMartes = substr($matriz, 52, 51);
        $arrayMiercoles = substr($matriz, 104, 51);
        $arrayJueves = substr($matriz, 156, 51);
        $arrayViernes = substr($matriz, 208, 51);

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

    /* 
    * Funcion que se encarga de dar cambiar el progreso del usuario seleccionado con en ddl en Personal. 
    * Parametros: Request-> Post
    * Return: json{miembro=boolean}
    */
    public function cambiaProgreso(Request $req){
  		
        //CARGA DROPDOWN
  		$nombre = $_POST['alumno'];
        $progreso = $_POST['progreso'];
    	DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update(['progreso' => $progreso]);
        return redirect()->back();
    }
}
