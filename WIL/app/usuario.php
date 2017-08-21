<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use DB;

class usuario extends Model
{

	public function horario(){

		return $this->hasMany(Horario::class);
	}



    public static function agrega($email, $pass, $nivel){

        $passH = Hash::make($pass);

        DB::table('usuarios')->insert(
            ['email' => $email, 'password' => $passH, 'nivel' => $nivel, 'progreso' => 0]
        );
        
    }
}
