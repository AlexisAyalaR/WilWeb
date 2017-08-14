<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;

class usuario extends Model
{
	protected $tabla = "usuario_table";

    public function agrega($data){

    	$email = Input::get('email');
    	$pass = Hash::make(Input::get('pass'));
    	$nivel = Input::get('nivel');
    	$progreso = 0;
    		
    	$usuarios = new Register();

    	$usuarios->email=$email;
    	$usuarios->password=$pass;
    	$usuarios->nivel=$nivel;
    	$usuarios->progreso=$progreso;

    	$usuarios->save();
    }
}
