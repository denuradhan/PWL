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


Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@getAPI');
    Route::get('/user', function () {
        return view('home');
    });
    Route::get('/edit/{id}', 'HomeController@edit');
    Route::get('/hapus/{id}', 'HomeController@hapus');
    Route::post('/edit/update', 'HomeController@update');
});
