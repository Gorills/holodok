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
    return view('index');
});
Route::get('/remont-holodilnikov', function () {
    return view('remont-holodilnikov');
});
Route::get('/remont-stiralnyh-mashin', function () {
    return view('remont-stiralnyh-mashin');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
