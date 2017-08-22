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

/*Login que redirecciona conforma al tipo de usuario
prueba.html*/
Route::post('/login', ["uses" => 'loginController@entra']);

/*Envía proyecto por mail
prueba.html*/
Route::post('/enviaProyecto', ["uses" => 'mailController@envia']);

/*Cambia horario de usuario
personal.html*/
Route::post('/cambiaHorario', ["uses" => 'usuarioController@cambiaHorario']);

/*Cambia progreso de usuario
personal.html*/
Route::post('/cambiaProgreso/', ["uses" => 'usuarioController@cambiaProgreso']);

/*Registra un usuario nuevo
personalS.html*/
Route::post('/registra', ["uses" => 'usuarioController@registraUsuario']);

/*Elimina un usuario existente
personalS.html*/
Route::post('/eliminaUsuario', ["uses" => 'usuarioController@eliminaUsuario']);

/*Obtiene info de usuario ingresado
ruta.info*/
Route::get('/getInfoUsuario', ["uses" => 'usuarioController@getInfo']);

/*Obtiene el nombre de los alumnos
ruta.info*/
Route::get('/getAlumnos', ["uses" => 'infoController@cargaAlumnos']);

/*Obtiene el nombre de los usuarios
ruta.info*/
Route::get('/getUsuarios', ["uses" => 'infoController@cargaUsuarios']);



