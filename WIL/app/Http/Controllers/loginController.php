<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\usuario;
use Illuminate\Http\Request;
use DB;
use Hash;

class loginController extends Controller
{
    public function entra(Request $req){

        
    	$email = $req->input('email');
    	$pass = $req->input('pass');
        
    	$usuario = DB::table('usuarios')->where('email', $email)->get();
    	$decodeJson = json_decode($usuario,true);
        if(count($decodeJson)==0)
            return \Response::json(["miembro"=>false],500);

    	$usuarioJson = $decodeJson[0];
    	$usuario_pass = $usuarioJson['password'];

    	if(!Hash::check($pass, $usuario_pass)){
            return \Response::json(["miembro"=>false],500);


    	} else{
    		$usuario_nivel = $usuarioJson['nivel'];

    		if($usuario_nivel == 0){
                /*Agarra el horario*/
                return \Response::json(["miembro"=>$usuarioJson, 'nivel'=>$usuario_nivel],200);
            }
    			
    		elseif($usuario_nivel == 1)
    			return \Response::json(["miembro"=>$usuarioJson, 'nivel'=>$usuario_nivel],200);

    		else
    			return \Response::json(["miembro"=>$usuarioJson, 'nivel'=>$usuario_nivel],200);
            
    	}

    }
}
