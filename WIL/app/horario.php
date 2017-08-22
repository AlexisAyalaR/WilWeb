<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class horario extends Model
{
    public function usuario(){

    	return $this->belongsTo(Usuario::class);
    }

    public static function agrega($id){

    	for ($i=1; $i < 6; $i++) { 
    		DB::table('horarios')->insert(
            	['dia' => $i, 'horas' => '{0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0}', 'usuario_id' => $id]
        	);
    	}
    }

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
}
