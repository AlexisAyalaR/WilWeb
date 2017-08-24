<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Input;
use Hash;
use DB;

class usuario extends Model
{
    /* 
    * Funcion que se encarga de dar la relación entre usuario y horario
    * Parametros:
    * Return: los horarios de un usuario dado
    */
	public function horario(){

		return $this->hasMany(Horario::class);
	}


    /* 
    * Funcion que se encarga de agregar un usuario a la base de datos
    * Parametros: Los datos del usuario a agregar
    * Return: id del usuario agregado
    */
    public static function agrega($email, $nombre, $pass, $nivel){

        $passH = Hash::make($pass);

        DB::table('usuarios')->insert(
            ['email' => $email, 'nombre' => $nombre, 'password' => $passH, 'nivel' => $nivel, 'progreso' => 0]
        );
        
        return DB::table('usuarios')->where('email', $email)->value('id');
    }

    /* 
    * Funcion que se encarga de eliminar un usuario de la base de datos
    * Parametros: El nombre del usuario [PELIGRO: QUE MAS DE DOS USUARIOS TENGAN EL MISMO NOMBRE]
    * Return: 
    */
    public static function elimina($nombre){

        $id = DB::table('usuarios')->where('nombre', $nombre)->value('id');

    	DB::table('usuarios')->where('id', $id)->delete();

        return $id;
    }

    public static function getById($nombre){

        return DB::table('usuarios')->where('nombre', $nombre)->value('id');
    }

}
