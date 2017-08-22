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
    	
    	$alumnos = DB::table('usuarios')->where('nivel', 0)->value('nombre');
    	return \Response::json(["alumnos" => $alumnos], 200);
  	}  
}