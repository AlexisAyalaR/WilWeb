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
    * Return:
    */
	public function registraUsuario(Request $req){

    	$email = $req->input('email');
        $nombre = $req->input('nombre');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
        //VALIDADO
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
    * Return:
    */
    public function eliminaUsuario(Request $req){

        //VALIDADO
        $nombre = $_POST['alumnoE'];

        if($nombre == ''){
            session(['eliminaUsuario' => -1]);
            return redirect()->back();
        }

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

    /* 
    * Funcion que se encarga de cargar el horario del usuario ingresado 
    * Parametros: 
    * Return:
    */
    public function cargaHorario(){

        //VALIDADO
        $nombre = $_POST['miembros1'];

        if($nombre == '')
            return redirect()->back();

        $usuario_id = usuario::getById($nombre);

        $horario = horario::getById($usuario_id);

        session(['horario' => $horario]);

        session(['nombre' => $nombre]); 

        return redirect()->back();

    }

    /* 
    * Funcion que se encarga de dar entregar los datos de un usuario ya ingresado en Personal
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

        if($cargaHorario == ''){
            session(['cargaHorario' => 0]);
            $cargaHorario = 0;
        }
        else{
            session(['cargaHorario' => 0]);
        }

        return \Response::json(["horario"=>$horario, "nombre" => $nombre, "cargaHorario" => $cargaHorario],200);
    }

    /* 
    * Funcion que se encarga de dar entregar los datos de un usuario ya ingresado en PersonalS
    * Parametros: 
    * Return: json{usuario, horario}
    */
    public function getInfoMiembroPersonalS(){

        $horario = session('horario');
        $nombre = session('nombre');
        $eliminaUsuario = session('eliminaUsuario');
        $agregaUsuario = session('agregaUsuario');
        $cargaHorario = session('cargaHorario');

        if($horario == ''){
        
            $usuario = session('jsonMiembro');
            $usuario_id = $usuario['id'];
            $nombre = $usuario['nombre'];
            $horario = horario::getById($usuario_id);

        }

        session(['horario' => '']);

        session(['nombre' => '']); 

        if($eliminaUsuario == ''){
            session(['eliminaUsuario' => 0]);
           $eliminaUsuario = 0;
        }
        else{
            session(['eliminaUsuario' => 0]);
        }

        if($agregaUsuario == ''){
            session(['agregaUsuario' => 0]);
           $agregaUsuario = 0;
        }
        else{
            session(['agregaUsuario' => 0]);
        }

        if($cargaHorario == ''){
            session(['cargaHorario' => 0]);
           $cargaHorario = 0;
        }
        else{
            session(['cargaHorario' => 0]);
        }

        return \Response::json(["horario"=>$horario, "nombre" => $nombre, "cargaHorario" => $cargaHorario, "agregaUsuario" => $agregaUsuario, "eliminaUsuario" => $eliminaUsuario],200);
    }

    /* 
    * Funcion que se encarga de dar cambiar el horario del usuario ingresado. 
    * Parametros: Request->POST
    * Return:
    */
    public function cambiaHorario(Request $req){

        $matriz = $req->input('matriz');

        $arrayLunes = substr($matriz, 0, 51);
        $arrayMartes = substr($matriz, 52, 51);
        $arrayMiercoles = substr($matriz, 104, 51);
        $arrayJueves = substr($matriz, 156, 51);
        $arrayViernes = substr($matriz, 208, 51);

        //VALIDADO
        $nombre = $_POST['miembros'];

        if($nombre == ''){
            session(['cargaHorario' => -1]);
            return redirect()->back();
        }
            

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
    * Return:
    */
    public function cambiaProgreso(Request $req){
  		
        //VALIDADO
  		$nombre = $_POST['alumno'];
        $progreso = $_POST['progreso'];

        if($nombre == '' || $progreso == '')
            return redirect()->back();

    	DB::table('usuarios')
            ->where('nombre', $nombre)
            ->update(['progreso' => $progreso]);
        return redirect()->back();
    }

    public function buscaHorario(Request $req){

        //VALIDADO
        $hora = $_POST['hora'];

        $dia = $_POST['dia'];

        if($hora == '' || $dia == '')
            return redirect()->back();

        return DB::table('usuarios')
                                ->join('horarios', 'usuarios.id', '=', 'horarios.usuario_id')
                                ->where([
                                    ['horarios.dia', '=', $dia],
                                    ['horarios.horas', '=', $hora]])
                                ->get();
                                //->value('usuarios.nombre');

        return $usuarios_nombres;
    } //5gifaw2Q=
}
