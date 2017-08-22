<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    public function usuario(){

    	return $this->belongsTo(Usuario::class);
    }

    public static function agrega($id){

    	for ($i=1; $i < 6; $i++) { 
    		DB::table('horarios')->insert(
            	['dia' => $i, 'horas' => '', 'idU' => $id]
        	);
    	}
    }
}
