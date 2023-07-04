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

Route::get('/index','homeController@index')->name('index');
Route::get('/services','homeController@services')->name('services');
Route::get('/about','homeController@about')->name('about');
Route::get('/appointment','homeController@appointment')->name('appointment');
Route::get('/features','homeController@features')->name('features');
Route::get('/teams','homeController@teams')->name('teams');
Route::get('/testimonial','homeController@testimonial')->name('testimonail');


