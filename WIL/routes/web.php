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
    return view('/welcome');
});

Route::post('/enviaProyecto', ["uses" => 'mailController@envia']);

Route::post('/login', ["uses" => 'loginController@entra']);

Route::post('/registra', ["uses" => 'usuarioController@registraUsuario']);

Route::post('/cambiaHorario', ["uses" => 'usuarioController@cambiaHorario']);

Route::post('/cambiaProgreso/{id}', ["uses" => 'usuarioController@cambiaProgreso']);

Route::get('/getInfoUsuario', ["uses" => 'usuarioController@getInfo']);

Route::get('/getAlumnos', ["uses" => 'infoController@cargaAlumnos']);

Route::get('/getUsuarios', ["uses" => 'infoController@cargaUsuarios']);

Route::post('/eliminaUsuario', ["uses" => 'usuarioController@eliminaUsuario']);
