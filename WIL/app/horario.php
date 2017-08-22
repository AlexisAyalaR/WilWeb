<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class horario extends Model
{
    /* 
    * Funcion que se encarga de dar la relación entre usuario y horario
    * Parametros:
    * Return: los usuarios de un horario dado
    */
    public function usuario(){

    	return $this->belongsTo(Usuario::class);
    }

    /* 
    * Funcion que se encarga de agregar un horario los horarios nulos del nuevo usuario
    * Parametros: El id del del usuario al cual se le agregará un horario
    * Return:
    */
    public static function agrega($id){

    	for ($i=1; $i < 6; $i++) { 
    		DB::table('horarios')->insert(
            	['dia' => $i, 'horas' => '{0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0}', 'usuario_id' => $id]
        	);
    	}
    }

    /* 
    * Funcion que se encarga de editar los horarios de un usuario
    * Parametros: El id del del usuario al cual se editaran los horarios y los horarios mismos
    * Return:
    */
    public static function modifica($usuario_id ,$arrayLunes, $arrayMartes, $arrayMiercoles, $arrayJueves, $arrayViernes){
    	DB::table('horarios')
    		->where([
    			['usuario_id', $usuario_id],
    			['dia', 1],])
            ->update(['horas' => $arrayLunes]);


        DB::table('horarios')
    		->where([
    			['usuario_id', $usuario_id],
    			['dia', 2],])
            ->update(['horas' => $arrayMartes]);


        DB::table('horarios')
    		->where([
    			['usuario_id', $usuario_id],
    			['dia', 3],])
            ->update(['horas' => $arrayMiercoles]);


        DB::table('horarios')
    		->where([
    			['usuario_id', $usuario_id],
    			['dia', 4],])
            ->update(['horas' => $arrayJueves]);
            

        DB::table('horarios')
    		->where([
    			['usuario_id', $usuario_id],
    			['dia', 5],])
            ->update(['horas' => $arrayViernes]);
    }

    /* 
    * Funcion que se encarga de regresar los horarios de un usuario dado
    * Parametros: El id del del usuario del cual se requieren los horarios.
    * Return:
    */
    public static function getById($usuario_id){

        return DB::table('horarios')
                ->where('usuario_id', $usuario_id)
                ->get();
    }
}
