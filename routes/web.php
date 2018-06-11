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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'HomeController@home');

Route::get('/payfee', 'FeeController@show');//returning view for fees
Route::post('/payfee/pay', 'FeeController@payfee');//saving payment


Route::get('/add', 'StudentController@show');
Route::post('/add/student', 'StudentController@save');
Rout::post('/search/studentnumber','StudentController@search');
