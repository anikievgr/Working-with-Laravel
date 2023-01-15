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

Route::get('/','MainController@pageHome');
Route::get('/incubirovanie','MainController@incubirovanie');
Route::get('/contact','MainController@contacti');
Route::get('/logTo','MainController@loginToTheAdminPanel');
Route::get('/adminPanel','MainController@adminPanel');
Route::get('/sales','MainController@adminSales');