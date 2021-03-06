<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use DB;
use Response;
use Illuminate\Http\Request;

class infoController extends Controller
{
    /* 
    * Funcion que se encarga de entregar el nombre de los alumnos
    * Parametros: 
    * Return: el nombre de los alumnos
    */
    public function cargaAlumnos(){
    	
    	$alumnos = DB::table('usuarios')
    				->select('nombre')
    				->where('nivel', 0)
    				->orderBy('nombre', 'desc')
    				->get();

    	return \Response::json(["alumnos" => $alumnos], 200);
  	}  

    /* 
    * Funcion que se encarga de entregar el nombre de los ususarios
    * Parametros: 
    * Return: el nombre de los usuarios
    */
  	public function cargaUsuarios(){
    	
    	$usuarios = DB::table('usuarios')
    				->select('nombre')
    				->where('nivel', 0)
    				->orWhere('nivel', 1)
    				->orderBy('nombre', 'desc')
    				->get();

    	return \Response::json(["usuarios" => $usuarios], 200);
  	} 

    /* 
    * Funcion que se encarga de entregar el nombre de los alumnos y del usuario
    * Parametros: 
    * Return: el nombre de los alumnos y del usuario
    */
    public function cargaAlumnosUsuario(){

        $usuario = session('jsonMiembro');

        $usuario_nombre = $usuario['nombre'];

        $usuarios = DB::table('usuarios')
                    ->select('nombre')
                    ->where('nivel', 0)
                    ->orderBy('nombre', 'desc')
                    ->get();


        return \Response::json(["alumnos" => $usuarios, "miembros" => $usuario_nombre], 200);
    }

    /* 
    * Funcion que se encarga de entregar el nivel del usuario para validar su entrada a una página
    * Parametros: 
    * Return: el nivel del usuario
    */
    public function verificaUsuario(){

        $usuario = session('jsonMiembro');

        if($usuario != '')
            $usuario_nivel = $usuario['nivel'];
        else
            $usuario_nivel = '-1';

        return \Response::json(["nivel" => $usuario_nivel], 200);
    }
}

