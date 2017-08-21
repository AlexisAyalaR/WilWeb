<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use Validator;
use Redirect;
use App\usuario;

class horarioController extends Controller
{
    public function cambia(Request $req){

        $UnoSieteL = $req->input('17:00Lu');


    	return $UnoSieteL;
    }
}
