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

Route::name('inicio')->get('/', function () {return view('welcome');});
Route::name('basico')->get('basico/', function () {return view('basico'); });
Route::name('campos')->get('campos/', function () {return view('campos'); });
Route::name('evaluar')->get('evaluar/', function () {return view('evaluar'); });
Route::name('validar')->get('validar/', function () {return view('validar'); });
Route::name('comprobar')->get('comprobar/', function () {return view('comprobar'); });
Route::name('random')->get('random/', function () {return view('R'); });

Route::name('colores')->get('colores/', function () {return view('colores'); });
//-------------------------------------------------------------

Route::name('jquery')->get('jquery/', function () {return view('jquery'); });
Route::name('formulario')->get('formulario/', function () {return view('formulario'); });
//--------------------------------------------------------------------------------

//--------------------------------------------------------------------------------
Route::name('entrada')->get('entrada/', 'SistemController@entrada');
Route::name('informacion')->get('informacion/', 'SistemController@informacion');
Route::name('combos')->get('combos/', 'SistemController@combos');
Route::name('datos')->post('datos/', 'SistemController@datos');


Route::name('js00')->get('js00/', 'JqueryController@js00');
Route::name('js01')->get('js01/', 'JqueryController@js01');
Route::name('js02')->get('js02/', 'JqueryController@js02');
Route::name('js02b')->get('js02b/', 'JqueryController@js02b');
//---------------------------------------------------------------------///
Route::name('gato')->get('gato/', function () {return view('gato'); });