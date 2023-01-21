<?php

use App\Http\Controllers\WorkWithBDController;
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
//admin panel
Route::get('/logTo','MainController@loginToTheAdminPanel');
Route::get('/adminPanel','MainController@adminPanel');
Route::get('/sales','MainController@adminSales');
Route::get('/chat','MainController@adminChat');
Route::get('/mail','MainController@adminMail');
//Form
Route::get('/adminIncubirovanie', 'MainController@adminIncubirovane');
Route::get('/adminContact', 'MainController@adminContact');
Route::get('/adminSlider', 'AdminController@Slider');
//формы
Route::post('/form', 'FormController@store')->name('form');
Route::resource('bd', 'WorkWithBDController');