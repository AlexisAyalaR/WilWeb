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
                session(['agregaUsuario' => -1]);
                return redirect()->back();
    		}
    	}
        session(['agregaUsuario' => 1]);
        return redirect()->back();
    }

    /* 
    * Funcion que se encarga de eliminar un usuario desde PersonalS
    * Parametros: Request->POST
    * Return: json{miembro=boolean}
    */
    public function eliminaUsuario(Request $req){

        $nombre = $_POST['alumnoE'];

        if($nombre == '')
            return redirect()->back();

        try{
            $id = usuario::elimina($nombre);
            horario::elimina($id);

        }catch(Exception $e){
            \Log::info('Error getInfo: '.$e);
            session(['eliminaUsuario' => -1]);
            return redirect()->back();

        }
        session(['eliminaUsuario' => 1]);
        return redirect()->back();
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

    public function cargaHorario(){

        $nombre = $_POST['miembros1'];

        $usuario_id = usuario::getById($nombre);

        $horario = horario::getById($usuario_id);

        session(['horario' => $horario]);

        session(['nombre' => $nombre]); 

        return redirect()->back();

    }

    /* 
    * Funcion que se encarga de dar entregar los datos de un usuario ya ingresado. 
    * Parametros: 
    * Return: json{usuario, horario}
    */
    public function getInfoMiembro(){

        $horario = session('horario');
        $nombre = session('nombre');
        $cargaHorario = session('cargaHorario');

        if($horario == ''){
        
            $usuario = session('jsonMiembro');
            $usuario_id = $usuario['id'];
            $nombre = $usuario['nombre'];
            $horario = horario::getById($usuario_id);

        }

        session(['horario' => '']);

        session(['nombre' => '']); 

        if($cargaHorario == '')
           $cargaHorario = 0;
        else{
            session(['cargaHorario' => 0]);
        }

        return \Response::json(["horario"=>$horario, "nombre" => $nombre, "cargaHorario" => $cargaHorario],200);
    }


    public function getInfoMiembroPersonalS(){

        $horario = session('horario');
        $nombre = session('nombre');
        $eliminaUsuario = session('eliminaUsuario');
        $agregaUsuario = session('agregaUsuario');

        if($horario == ''){
        
            $usuario = session('jsonMiembro');
            $usuario_id = $usuario['id'];
            $nombre = $usuario['nombre'];
            $horario = horario::getById($usuario_id);

        }

        session(['horario' => '']);

        session(['nombre' => '']); 

        if($eliminaUsuario == '')
           $eliminaUsuario = 0;
        else{
            session(['eliminaUsuario' => 0]);
        }

        if($agregaUsuario == '')
           $agregaUsuario = 0;
        else{
            session(['agregaUsuario' => 0]);
        }

        return \Response::json(["horario"=>$horario, "nombre" => $nombre, "agregaUsuario" => $agregaUsuario, "eliminaUsuario" => $eliminaUsuario],200);
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

        $nombre = $_POST['miembros'];

        if($nombre == '')
            return redirect()->back();
            

        $usuario_id = usuario::getById($nombre);

        try{
            horario::modifica($usuario_id ,$arrayLunes, $arrayMartes, $arrayMiercoles, $arrayJueves, $arrayViernes);

        }catch(Exception $e){
            \Log::info('Error getInfo: '.$e);
            session(['cargaHorario' => -1]);
            return redirect()->back();

        }
        session(['cargaHorario' => 1]);
        return redirect()->back();
    }

    /* 
    * Funcion que se encarga de dar cambiar el progreso del usuario seleccionado con en ddl en Personal. 
    * Parametros: Request-> Post
    * Return: json{miembro=boolean}
    */
    public function cambiaProgreso(Request $req){
  		
  		$nombre = $_POST['alumno'];
        $progreso = $_POST['progreso'];
    	DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update(['progreso' => $progreso]);
        return redirect()->back();
    }
}
