<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', function(){
    return view('pages.login');
});

Route::post('/', 'LoginController@store');

Route::get('/webapp', 'webappController@index');

Route::get('/webapp/add/path', 'webappController@create');
Route::post('/webapp/add/img', 'webappController@store');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
