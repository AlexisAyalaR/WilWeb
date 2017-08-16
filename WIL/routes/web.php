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

Route::post('/WilWeb/Wil/public/html/prueba.html','mailController@envia');

Route::post('/WilWeb/Wil/public/html/alumno.html', 'loginController@entra');

Route::post('/WilWeb/Wil/public/html/registra.html','registraController@registraUsuario');

