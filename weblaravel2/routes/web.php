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

Route::get('Goi', 'MeController@XinChao');

Route::get('myView', 'MeController@myView');

Route::get('Time/{t}', 'MeController@Time');

Route::get('master', 'MeController@getMaster');

View::share('khoahoc', 'laravel');


Route::get('blade', function() {
    return view('page.laravel');
});

Route::group(['prefix' => 'content'], function() {
    Route::get('laravel', 'MeController@getLaravel');
    Route::get('php', 'MeController@getPhp'); 
});

Route::get('vail', 'MeController@getLogin');

Route::post('vail', 'MeController@postLogin');