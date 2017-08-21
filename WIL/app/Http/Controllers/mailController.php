<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Mail;
use App\Mail\Proyecto;

class mailController extends Controller
{
    public function envia(Request $req){

    	
    	$tipo = $req->input('tipoProyecto');
    	$desc = $req->input('descripcion');
    	$telf = $req->input('telefono');
    	$mail = $req->input('email');

    	Mail::send(new Proyecto($req));
    	
  	}  
}