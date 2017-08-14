<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function registraUsuario(Request $req){

    	$email = $req->input('email');
    	$pass = $req->input('pass');
    	$passC = $req->input('passC');
    	$nivel = $req->input('nivel');

    	echo $email;
    }
}
