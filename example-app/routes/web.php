<?php

use App\Http\Controllers\MailController;
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
Route::resource('mail', MailController::class);
//Form
Route::prefix('admin')->group(function () {
    Route::prefix('/pageHome')->group(function () {
            Route::get('/openAdminSlider', 'App\Http\Controllers\AdminPanel\SliderController@slider')->name('adminSlider');
            Route::prefix('adminSlider')->group(function () {
            Route::get('bd/delete{id}', 'App\Http\Controllers\AdminPanel\SliderController@delete')->name('bd.delete');
            Route::resource('bd', 'App\Http\Controllers\AdminPanel\SliderController')->except([
                    'create', 'show', 'edit','destroy'
            ]);
            
           
        });

        Route::get('/openAdminGalerea', 'App\Http\Controllers\AdminPanel\GalleryController@gallery');
        Route::get('adminGalleryGroup/delete{id}', 'App\Http\Controllers\AdminPanel\GalleryController@deleteCategory')->name('adminGalleryGroup.deleteCategory');
        Route::prefix('adminGalleryGroup')->group(function () {
            Route::resource('adminGalerea', 'App\Http\Controllers\AdminPanel\GalleryController')->except([
                    'create', 'edit','destroy'
            ]);
        });
        
            
    });
});
Route::get('/adminIncubirovanie', 'MainController@adminIncubirovane');
Route::get('/adminContact', 'MainController@adminContact');
//формы
Route::post('/form', 'FormController@store')->name('form');
