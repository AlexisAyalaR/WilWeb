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
    public function cargaAlumnos(){
    	
    	$alumnos = DB::table('usuarios')
    				->select('nombre')
    				->where('nivel', 0)
    				->orderBy('nombre', 'desc')
    				->get();

    	return \Response::json(["alumnos" => $alumnos], 200);
  	}  

  	public function cargaUsuarios(){
    	
    	$usuarios = DB::table('usuarios')
    				->select('nombre')
    				->where('nivel', 0)
    				->orWhere('nivel', 1)
    				->orderBy('nombre', 'desc')
    				->get();

    	return \Response::json(["usuarios" => $usuarios], 200);
  	} 
}