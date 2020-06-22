<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::prefix('hello')->group(function() {
    Route::get('/', 'HelloController@index');
    Route::get('/view', 'HelloController@view');
    Route::get('/list', 'HelloController@list');
});

Route::prefix('view')->group(function() {
    Route::get('/escape', 'ViewController@escape');
    Route::get('/if', 'ViewController@if');
    Route::get('/unless', 'ViewController@unless');
    Route::get('/isset', 'ViewController@isset');
    Route::get('/switch', 'ViewController@switch');
    Route::get('/while', 'ViewController@while');
    Route::get('/for', 'ViewController@for');
    Route::get('/foreach_assoc', 'ViewController@foreach_assoc');
    Route::get('/foreach_loop', 'ViewController@foreach_loop');
    Route::get('/master', 'ViewController@master');
    Route::get('/comp', 'ViewController@comp');
});

Route::get('route/param/{id?}', 'RouteController@param');

Route::get('ctrl/form', 'CtrlController@form');
Route::post('ctrl/result', 'CtrlController@result');
Route::get('ctrl/upload', 'CtrlController@upload');
Route::post('ctrl/uploadfile', 'CtrlController@uploadfile');











