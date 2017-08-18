<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use DB;

class usuario extends Model
{
	protected $tabla = "usuario_table";

    public static function agrega($email, $pass, $nivel){

        $passH = Hash::make($pass);

        DB::table('usuarios')->insert(
            ['email' => $email, 'password' => $passH, 'nivel' => $nivel, 'progreso' => 0]
        );
    }
}
