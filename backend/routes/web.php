<?php

use Illuminate\Support\Facades\Route;
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE'); 
header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
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

Route::get('teams','TeamController@index');
Route::get('matches','MatchesController@index');

Route::get('team/{id}','TeamController@show');

Route::get('teamDetail/{id}','TeamController@edit');

Route::get('matches/{id}','MatchesController@show');

Route::get('points/{id}','PointsController@show');




