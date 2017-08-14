<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\usuario;
use Illuminate\Http\Request;
use DB;

class loginController extends Controller
{
    public function entra(Request $req){

    	$email = $req->input('email');
    	$pass = $req->input('pass');

    	$usuario = DB::table('users')->where('email', $email)->get();
    	$decodeJson = json_decode($usuario,true);
    	$arrayJson = $decodeJson[0];
    	$usuario_pass = $arrayJson['password'];

    	if($pass != $usuario_pass){
    		redirect()->back()->with('Usuario o contraseña incorrecta');
    	} else{
    		$usuario_nivel = $arrayJson['nivel'];
    		if($usuario_nivel == 0)
    			redirect('/WilWeb/Wil/public/html/alumno.html');
    		elseif($usuario_nivel == 1)
    			redirect('/WilWeb/Wil/public/html/personal.html');
    		else
    			redirect('/WilWeb/Wil/public/html/personalS.html');
    		return $usuario;
    	}

    }
}
