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
Route::name('colores')->get('colores/', function () {return view('colores'); });
Route::name('jquery')->get('jquery/', function () {return view('jquery'); });
Route::name('formulario')->get('formulario/', function () {return view('formulario'); });
//--------------------------------------------------------------------------------
Route::name('calculadora')->get('calculadora/', function () {return view('calculadora'); });
Route::name('rotacion')->get('rotacion/', function () {return view('rotacion'); });
Route::name('contr')->get('contr/', function () {return view('contr'); });
Route::name('cal')->get('cal/', function () {return view('cal'); });
//--------------------------------------------------------------------------------
Route::name('entrada')->get('entrada/', 'SistemController@entrada');
Route::name('js00')->get('js00/', 'JqueryController@js00');