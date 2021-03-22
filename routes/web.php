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

Route::get('/hello','HelloController@Index');

Route::get('/Services','HelloController@Services');

Route::get('/employee',"employeeController@index");

Route::get('/employee/create',"employeeController@create");

Route::post('/employee',"employeeController@store");


