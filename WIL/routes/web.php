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
    return view('/index');
});

Route::post('/enviaProyecto','mailController@envia');

Route::get('/alumno', function(){
	return view('/alumno');
});

Route::get('/personal', function(){
	return view('/personal');
});

Route::get('/personalS', function(){
	return view('/personalS');
});