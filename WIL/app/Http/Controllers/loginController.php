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
            return redirect()->back();

    	$usuarioJson = $decodeJson[0];
    	$usuario_pass = $usuarioJson['password'];

    	if(!Hash::check($pass, $usuario_pass)){
            return redirect()->back();
            //\Response::json(["miembro"=>false],500);


    	} else{
    		$usuario_nivel = $usuarioJson['nivel'];

    		if($usuario_nivel == 0){
                /*Agarra el horario*/
                session(['jsonMiembro' => $usuarioJson]); 
                return redirect('/html/alumno.html');

            }elseif($usuario_nivel == 1){

                session(['jsonMiembro' => $usuarioJson]); 
                return redirect('/html/personal.html');
            }else{
                
                session(['jsonMiembro' => $usuarioJson]); 
    			return redirect('/html/personalS.html');
            }
            
    	}
        //\Response::json(["miembro"=>$usuarioJson, 'nivel'=>$usuario_nivel],200);

    }
}
