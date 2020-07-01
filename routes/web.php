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

Route::any('/', array( 'as' => 'home', 'uses' => 'BaseController@index' ));
Route::group(['prefix' => '{locale}', 'where' => ['locale' => '[a-zA-Z]{2}'] , 'middleware' => 'setlocale'], function($locale) {
    
    Route::get('/', 'BaseController@index');
    Route::get('/services', 'BaseController@services');
    Route::get('/links', 'BaseController@links');
    Route::get('/about', 'BaseController@about');
    Route::get('/contact', 'BaseController@contact');
    Route::get('/privacy', 'BaseController@privacy');
});

Auth::routes();

Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::group(['prefix' => '4m3i',  'middleware' => 'auth'], function(){
    Route::get('/', 'AdminController@index');
     /* Services Route */
    Route::group(['prefix' => 'services','as'=>'services.','middleware' => 'auth'], function () {
        Route::get('/', 'ServicesController@index');
        Route::get('add', 'ServicesController@add')->name('add');
        Route::post('add', 'ServicesController@insert')->name('insert');
        Route::get('edit/{id}', 'ServicesController@edit')->name('edit');
        Route::post('edit/{id}', 'ServicesController@update')->name('update');
        Route::get('delete/{id}', 'ServicesController@delete')->name('delete');
    });
     /* Links Route */
    Route::group(['prefix' => 'link','as'=>'link.','middleware' => 'auth'], function () {
        Route::get('/', 'LinkController@index');
        Route::get('add', 'LinkController@add')->name('add');
        Route::post('add', 'LinkController@insert')->name('insert');
        Route::get('edit/{id}', 'LinkController@edit')->name('edit');
        Route::post('edit/{id}', 'LinkController@update')->name('update');
        Route::get('delete/{id}', 'LinkController@delete')->name('delete');
    });
    /* About Route */
    Route::group(['prefix' => 'about','as'=>'about.','middleware' => 'auth'], function () {
        Route::get('/', 'AboutController@index');
        Route::post('edit/{id}', 'AboutController@update')->name('update');
    });
     /* Contact Route */
     Route::group(['prefix' => 'contact','as'=>'contact.','middleware' => 'auth'], function () {
        Route::get('/', 'ContactController@index');
        Route::post('edit/{id}', 'ContactController@update')->name('update');
    });
});

