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
    return view('.front-end.index');
});
Route::get('/services', function () {
    return view('.front-end.services');
});
Route::get('/links', function () {
    return view('.front-end.links');
});
Route::get('/about', function () {
    return view('.front-end.about');
});
Route::get('/contact', function () {
    return view('.front-end.contact');
});

Auth::routes();

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::group(['namespace' => 'Admin','prefix' => 'admin',  'middleware' => 'auth'], function(){
    Route::view('/', 'backend.pages.index');
    Route::group(['namespace' => 'Services', 'prefix' => 'services','as'=>'services.','middleware' => 'auth'], function () {
        Route::get('/', 'ServicesController@index');
        Route::get('add', 'ServicesController@add')->name('add');
        Route::get('delete/{id}', 'ServicesController@delete')->name('delete');
    });
});

