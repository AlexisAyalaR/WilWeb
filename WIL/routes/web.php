<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('/pruebaPaul');
});

Route::post('/enviaProyecto','mailController@envia');

Route::post('/WilWeb/Wil/public/html/alumno.html', 'loginController@muestraUsuario');




/*
function(){

	$json -> name = 'Alexis'; //array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
    $paul = json_encode($json);

    return $paul;
*/